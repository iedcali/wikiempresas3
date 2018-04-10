{!! Form::open(['method' => 'GET', 'url' => '/empresa', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
<div class="input-group">
    <input type="text" class="form-control" name="search" placeholder="Search...">
    <span class="input-group-btn">
        <button class="btn btn-default" type="submit">
            <i class="fa fa-search"></i>
        </button>
    </span>
</div>

{!! Form::close() !!}