@component('admin.layouts.content', ['title' => 'گزارش ارزیابی ها'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">گزارش ارزیابی</li>
    @endslot

    <div class="col-12">
        <div class="card">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">ارزیابی شدگان</h3>
                    <div class="card-tools d-flex">
                        <form action="">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="جستجو" value="{{ request('search') }}">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0 text-center">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>شناسنه کاربر</th>
                            <th>نام و نام خانوادگی کاربر</th>
                            <th>قابلیت های شغلی</th>
                            <th>مسئولیت های شغلی</th>
                            <th>توانایی شغلی</th>
                            <th>شرایط کار</th>
                            <th>جمع کل</th>
                        </tr>
                        @foreach($scoures as $key => $scoure)
                            <tr>
{{--                                <td>{{ ($scoures->currentPage() - 1) * $scoures->perPage() + $loop->iteration }}</td>--}}
                                <td>{{ ++$key }}</td>
                                <td>{{$scoure->user->name}}</td>
                                                   <?php
                                $subbunches = \App\Models\Scoure::where('bunch_id' , 1 )->where('user_id' , $scoure->user->id)->sum('scoure');
                                ?>
                                <td>{{$subbunches}}</td>
                                <?php
                                $subbunches = \App\Models\Scoure::where('bunch_id' , 2 )->where('user_id' , $scoure->user->id)->sum('scoure');
                                ?>
                                <td>{{$subbunches}}</td>
                                <?php
                                $subbunches = \App\Models\Scoure::where('bunch_id' , 3 )->where('user_id' , $scoure->user->id)->sum('scoure');
                                ?>
                                <td>{{$subbunches}}</td>
                                <?php
                                $subbunches = \App\Models\Scoure::where('bunch_id' , 4 )->where('user_id' , $scoure->user->id)->sum('scoure');
                                ?>
                                <td>{{$subbunches}}</td>
                                <?php
                                $subbunches = \App\Models\Scoure::where('user_id' , $scoure->user->id)->sum('scoure');
                                ?>
                                <td>{{$subbunches}}</td>
                                <td>
                                    <div class="d-flex">
                                            <a href="{{route('admin.arzyabi.edit', $scoure->id)}}" class="btn btn-sm btn-primary ml-1">ویرایش</a>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                        </tbody></table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
{{--                    {{ $scoures->render() }}--}}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>



@endcomponent
