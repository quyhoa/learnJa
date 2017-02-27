<ul class="nav navbar-nav side-nav">
    <li id="id_user" onclick="setActive('id_user')">
        <a href="/adm/index"><i class="glyphicon glyphicon-user" aria-hidden="true"></i>User</a>
    </li>
    <li id="id_category" onclick="setActive('id_category')">
        <a href="/adm/category/index"><i class="glyphicon glyphicon-book" aria-hidden="true"></i> Categories</a>
    </li>
    <li id="id_product" onclick="setActive('id_product')">
        <a href="/adm/product"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i> Product</a>
    </li>
    <li id="id_product" onclick="setActive('id_product')">
        <a href="{{Route('mail')}}"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i> Mail manager</a>
    </li>
</ul>
