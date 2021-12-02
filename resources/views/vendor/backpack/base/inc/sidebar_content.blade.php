<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('article') }}'><i class='nav-icon la la-newspaper'></i> Články</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('news') }}'><i class='nav-icon la la-calendar'></i> Aktuality</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('tag') }}'><i class='nav-icon la la-tag'></i> Tagy</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('member') }}'><i class='nav-icon la la-user'></i> Kto sme</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('faq') }}'><i class='nav-icon la la-question'></i> FAQ</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('info') }}'><i class='nav-icon la la-info'></i> Zámer</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('partner') }}'><i class='nav-icon la la-user-friends'></i> Partneri</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('support') }}'><i class='nav-icon la la-share-alt'></i> Podpora a spolupráca</a></li>
@if (App\Models\Statute::first())
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('statute/' .  App\Models\Statute::first()->id . '/edit') }}'><i class='nav-icon la la-file-alt'></i> Štatút</a></li>
@endif