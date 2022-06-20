@component('admin.layouts.content', ['title'=> 'اعمال دسترسی به کاربران'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">لیست کاربران</a></li>
        <li class="breadcrumb-item active">ایجاد اعمال به کاربران</li>
    @endslot

    @slot('script')
        <script>
            $('#roles').select2({
                'placeholder' : 'مجوز گروهی را انتخاب کنید'
            })
            $('#permissions').select2({
                'placeholder' : 'مجوز انفرادی را انتخاب کنید'
            })
        </script>
    @endslot
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم اعمال دسترسی به کاربران</h3>
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('admin.users.permissions.store' , $user->id)}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="inputNumber_melli3" class="col-sm-2 control-label">لیست مجوزهای گروهی</label>
                <select class="form-control" name="roles[]" id="roles" multiple>
                    @foreach(\App\Models\Role::all() as $role)
                        <option value="{{$role->id}}" {{ in_array($role->id , $user->roles->pluck('id')->toArray()) ? 'selected' : '' }}>{{$role->name}} - {{$role->label}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="inputNumber_melli3" class="col-sm-2 control-label">لیست مجوزهای انفرادی</label>
                <select class="form-control" name="permissions[]" id="permissions" multiple>
                        @foreach(\App\Models\Permission::all() as $permission)
                            <option value="{{$permission->id}}" {{ in_array($permission->id , $user->permissions->pluck('id')->toArray()) ? 'selected' : '' }}>{{$permission->name}} - {{$permission->label}}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ثبت</button>
            <a href="{{route('admin.roles.index')}}" class="btn btn-default float-left">لغو</a>
        </div>
        <!-- /.card-footer -->
    </form>

@endcomponent
