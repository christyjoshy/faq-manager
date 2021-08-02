<div class="d-flex flex-column flex-shrink-0 p-3 min-vh-100">
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="{{ route('backend.category.livewire') }}" class="nav-link {{ request()->is('livewire/categories') ? 'active' : 'link-dark' }}">
          Categories
        </a>
      </li>
      <hr>
      <li>
        <a href="{{ route('backend.faq.livewire') }}" class="nav-link {{ request()->is('livewire/queries') ? 'active' : 'link-dark' }}">
          Queries
        </a>
      </li>
      <hr>
    </ul>
  </div>
