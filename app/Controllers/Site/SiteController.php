<?php
namespace App\Controllers\Site;

use Src\Classes\{
	Request,
	Controller,
	Mail
};
use App\Models\{
	Product,
	Notice,
	Banner,
	SlideShow,
	FormContact
};

class SiteController extends Controller{
	public function index(){
		$products = Product::where('visible', true)->orderBy('id', 'DESC')->limit(20)->get();
		$products_showcase = Product::where('visible', true)->where('showcase', true)->orderBy('id', 'DESC')->get();
		$notices = Notice::orderBy('id', 'DESC')->limit(3)->get();
		$banners = Banner::all();
		$slideshow = SlideShow::all();

		return view('site.index', compact('products', 'products_showcase', 'notices', 'banners', 'slideshow'));
	}

	public function contact(){
		return view('site.contact.index');
	}

	public function sendMail(){
		$data = (new Request())->all();
		$form = new FormContact();

		$this->validator($data, $form->rolesCreate, $form->messages);

		$result = Mail::isHtml(true)
						->charset(config('mail.charset'))
						->addFrom($data['email'], $data['name'])
						->subject('Contato via formulário ' . config('app.name') . ': ' . $data['subject'])
						->message(view('mail.contact', $data))
						->send(config('mail.to'), config('app.name'));

		if($result){
			$form->create($data);

			redirect(route('site') . '#contact', ['success' => 'Sua mensagem foi enviada com sucesso, Em breve enviaremos uma resposta!']);
		}

		redirect(route('site') . '#contact', ['error' => 'Infelizmente não foi possível enviar à mensagem, Ocorreu um erro no processo de envio!']);
	}
}