<nav class="menu">
	<div class="menu-header">
		<p>{{ auth()->user()->name }}</p>
		<p>{{ auth()->user()->email }}</p>
	</div>
	<ul>
		<a href="{{ route('panel') }}" title="Página Inicial"><li><i class="fas fa-home"></i> Início</li></a>

		@if(can('view.users'))
			<a href="{{ route('panel.users') }}" title="Página de Usuários"><li><i class="fas fa-users"></i> Usuários</li></a>
		@endif

		@if(can('view.clients'))
			<a href="{{ route('panel.clients') }}" title="Página de Clientes"><li><i class="fas fa-user-circle"></i> Clientes</li></a>
		@endif

		@if(can('view.products'))
			<a href="{{ route('panel.products') }}" title="Página de Produtos"><li><i class="fas fa-box"></i> Produtos</li></a>
		@endif

		@if(can('view.ratings'))
			<a href="{{ route('panel.ratings') }}" title="Página de Avaliações"><li><i class="fas fa-star"></i> Avaliações</li></a>
		@endif

		@if(can('view.requests'))
			<a href="{{ route('panel.requests') }}" title="Página de Pedidos"><li><i class="fas fa-list"></i> Pedidos</li></a>
		@endif

		@if(can('view.coupons'))
			<a href="{{ route('panel.coupons') }}" title="Página de Cupons de Desconto"><li><i class="fas fa-percent"></i> Cupons</li></a>
		@endif

		@if(can('view.slideshow'))
			<a href="{{ route('panel.slideshow') }}" title="Página do Carrossel de Imagens"><li><i class="fas fa-image"></i> Carrossel</li></a>
		@endif

		@if(can('view.banners'))
			<a href="{{ route('panel.banners') }}" title="Página de Banners"><li><i class="fas fa-images"></i> Banners</li></a>
		@endif

		@if(can('view.depoiments'))
			<a href="{{ route('panel.depoiments') }}" title="Página de Depoimentos"><li><i class="fas fa-smile"></i> Depoimentos</li></a>
		@endif

		@if(can('view.notices'))
			<a href="{{ route('panel.notices') }}" title="Página do Blog"><li><i class="fas fa-newspaper"></i> Blog</li></a>
		@endif

		@if(can('view.comments'))
			<a href="{{ route('panel.comments') }}" title="Página de Comentários"><li><i class="fas fa-comments"></i> Comentários</li></a>
		@endif

		@if(can('view.categories'))
			<a href="{{ route('panel.categories') }}" title="Página de Categorias"><li><i class="fas fa-tag"></i> Categorias</li></a>
		@endif

		@if(can('view.roles'))
			<a href="{{ route('panel.roles') }}" title="Página de Funções"><li><i class="fas fa-user-tie"></i> Funções</li></a>
		@endif

		@if(can('view.permissions'))
			<a href="{{ route('panel.permissions') }}" title="Página de Permissões"><li><i class="fas fa-lock"></i> Permissões</li></a>
		@endif
		
		<a href="{{ route('panel.logout') }}" title="Deslogar do Sistema"><li><i class="fas fa-sign-out-alt"></i> Sair</li></a>
	</ul>
</nav>