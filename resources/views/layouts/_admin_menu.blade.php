<ul class="nav navbar-nav">
    <li><a href="{{ url('admin/posts') }}">Articles</a></li>
    <li><a href="{{ url('admin/categories') }}">Catégories</a></li>
    <li><a href="{{ url('admin/comments') }}">Commentaires</a></li>
    <li><a href="{{ url('admin/tags') }}">Mots-clés</a></li>

    @if (Auth::user()->is_admin)
        <li><a href="{{ url('admin/users') }}">Utilisateurs</a></li>
    @endif
</ul>
