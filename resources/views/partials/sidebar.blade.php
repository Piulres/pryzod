@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li>
                <select class="searchable-field form-control"></select>
            </li>

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>

            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('permission_access')
                    <li>
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('global.permissions.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('role_access')
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('global.roles.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('global.users.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_action_access')
                    <li>
                        <a href="{{ route('admin.user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span>@lang('global.user-actions.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('team_access')
                    <li>
                        <a href="{{ route('admin.teams.index') }}">
                            <i class="fa fa-users"></i>
                            <span>@lang('global.teams.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('time_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-clock-o"></i>
                    <span>@lang('global.time-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('time_work_type_access')
                    <li>
                        <a href="{{ route('admin.time_work_types.index') }}">
                            <i class="fa fa-th"></i>
                            <span>@lang('global.time-work-types.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('time_project_access')
                    <li>
                        <a href="{{ route('admin.time_projects.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('global.time-projects.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('time_entry_access')
                    <li>
                        <a href="{{ route('admin.time_entries.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('global.time-entries.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('time_report_access')
                    <li>
                        <a href="{{ route('admin.time_reports.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('global.time-reports.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('book_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>@lang('global.books.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('category_access')
                    <li>
                        <a href="{{ route('admin.categories.index') }}">
                            <i class="fa fa-list"></i>
                            <span>@lang('global.category.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('book_access')
                    <li>
                        <a href="{{ route('admin.books.index') }}">
                            <i class="fa fa-book"></i>
                            <span>@lang('global.book.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('contact_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-phone-square"></i>
                    <span>@lang('global.contact-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('contact_company_access')
                    <li>
                        <a href="{{ route('admin.contact_companies.index') }}">
                            <i class="fa fa-building-o"></i>
                            <span>@lang('global.contact-companies.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('contact_access')
                    <li>
                        <a href="{{ route('admin.contacts.index') }}">
                            <i class="fa fa-user-plus"></i>
                            <span>@lang('global.contacts.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('basic_crm_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-briefcase"></i>
                    <span>@lang('global.basic-crm.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('crm_status_access')
                    <li>
                        <a href="{{ route('admin.crm_statuses.index') }}">
                            <i class="fa fa-folder"></i>
                            <span>@lang('global.crm-statuses.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('crm_customer_access')
                    <li>
                        <a href="{{ route('admin.crm_customers.index') }}">
                            <i class="fa fa-user-plus"></i>
                            <span>@lang('global.crm-customers.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('crm_note_access')
                    <li>
                        <a href="{{ route('admin.crm_notes.index') }}">
                            <i class="fa fa-building-o"></i>
                            <span>@lang('global.crm-notes.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('crm_document_access')
                    <li>
                        <a href="{{ route('admin.crm_documents.index') }}">
                            <i class="fa fa-file"></i>
                            <span>@lang('global.crm-documents.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            

            

            
            @php ($unread = App\MessengerTopic::countUnread())
            <li class="{{ $request->segment(2) == 'messenger' ? 'active' : '' }} {{ ($unread > 0 ? 'unread' : '') }}">
                <a href="{{ route('admin.messenger.index') }}">
                    <i class="fa fa-envelope"></i>

                    <span>Messages</span>
                    @if($unread > 0)
                        {{ ($unread > 0 ? '('.$unread.')' : '') }}
                    @endif
                </a>
            </li>
            <style>
                .page-sidebar-menu .unread * {
                    font-weight:bold !important;
                }
            </style>



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('global.app_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

