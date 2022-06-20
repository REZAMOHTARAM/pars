@component('admin.layouts.content', ['title'=> 'ویرایش زیر شاخه اصلی جدید'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.bunches.index')}}">لیست شاخه های اصلی</a></li>
        <li class="breadcrumb-item active">ویرایش زیر شاخه اصلی</li>
    @endslot
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ویرایش زیر شاخه اصلی</h3>
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('admin.subbunches.update' , $subbunch->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="card-body">
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">عنوان زیر شاخه اصلی</label>
                <input type="text" name="name" class="form-control" id="inputName3" placeholder="عنوان زیر شاخه اصلی را وارد کنید" value="{{$subbunch->name}}">
            </div>
        </div>
            @php
                $bunchid = \App\Models\Bunch::find(request('bunchid'));
            @endphp
            <div class="card-body">
                <div class="form-group">
                    <label for="inputName3" class="col-sm-2 control-label">عنوان شاخه اصلی</label>
                    <input type="text" name="bunchname" class="form-control" id="inputName3" placeholder="عنوان زیر شاخه اصلی را وارد کنید" disabled value="{{$bunchid->name}}">
                    <input type="hidden" name="bunch_id" class="form-control" id="inputName3" placeholder="عنوان زیر شاخه اصلی را وارد کنید" value="{{$subbunch->bunch_id}}">
                </div>
            </div>
    <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ویرایش</button>
            <a href="{{route('admin.subbunches.index')}}?bunchid={{$bunchid->id}}" class="btn btn-default float-left">لغو</a>
        </div>
        <!-- /.card-footer -->
    </form>

@endcomponent
