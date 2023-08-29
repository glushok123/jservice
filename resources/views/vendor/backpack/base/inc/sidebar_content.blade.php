
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('repair-category') }}"><i class="nav-icon la la-folder"></i> Категории</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('repair-sub-category') }}"><i class="nav-icon la la-grip-horizontal"></i> Подкатегории</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('repair-service') }}"><i class="nav-icon la la-clipboard-list"></i> Услуги</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('repair-brand') }}"><i class="nav-icon la la-industry"></i> Бренды</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('repair-review') }}"><i class="nav-icon la la-medal"></i> Отзывы</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('repair-question-sub-category') }}"><i class="nav-icon la la-question"></i> Вопросы</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('repair-order') }}"><i class="nav-icon la la-first-order"></i> Заявки</a></li>

<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Авторизация</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Пользователи</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Роли</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Права</span></a></li>
    </ul>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i> Logs</a></li>
<!--li class='nav-item'><a class='nav-link' href='{{ backpack_url('page') }}'><i class='nav-icon la la-file-o'></i> <span>Pages</span></a></!--li-->
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon la la-cog'></i> <span>Конфигурация</span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('backup') }}'><i class='nav-icon la la-hdd-o'></i> Backups</a></li>
