<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Courses</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=2.9.1">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.9.1">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('formateur.include.sidebar')

            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Courses</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total {{count($cours)}} Courses.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li class="nk-block-tools-opt" data-toggle="modal" data-target="#modalCreate"><a class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Course</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner p-0">
                                                <table class="nk-tb-list nk-tb-ulist">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col nk-tb-col-check">
                                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input" id="pid-all">
                                                                    <label class="custom-control-label" for="pid-all"></label>
                                                                </div>
                                                            </th>
                                                            <th class="nk-tb-col"><span class="sub-text">Course Name</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Category</span></th>
                                                            {{-- <th class="nk-tb-col tb-col-lg"><span class="sub-text">Instractor</span></th> --}}
                                                            {{-- <th class="nk-tb-col tb-col-lg"><span class="sub-text">Lesson</span></th> --}}
                                                            <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Enrole Student</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Price</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Uploaded</span></th>
                                                            {{-- <th class="nk-tb-col nk-tb-col-tools text-right">
                                                                <ul class="nk-tb-actions gx-1">
                                                                    <li>
                                                                        <div class="dropdown">
                                                                            <a href="#" class="btn btn-sm btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a href="#"><em class="icon ni ni-archive"></em><span>Mark As Archive</span></a></li>
                                                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Category</span></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </th> --}}
                                                        </tr><!-- .nk-tb-item -->
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($cours as $cour)
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="pid-01">
                                                                        <label class="custom-control-label" for="pid-01"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <a class="project-title">
                                                                        <div class="user-avatar sq "><img src="http://127.0.0.1:8000/assets/images/{{$cour->image}}"></span></div>
                                                                        <div class="project-info">
                                                                       
                                                                            
                                                                            <h6 class="title">{{$cour->name}}</h6>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-lg">
                                                                    <span>Web Development</span>
                                                                </td>
                                                                {{-- <td class="nk-tb-col tb-col-lg">
                                                                    <span>{{$formateur_name->name}}</span>
                                                                </td> --}}
                                                                <td class="nk-tb-col tb-col-xxl">
                                                                    <span>Total enrolment: 25</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span class="badge badge-dim badge-success">{{$cour->price}} TND</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb">
                                                                    <span>{{$cour->created_at}}</span>
                                                                </td>
                                                             
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="{{route('updateCourseView','id='.$cour->id)}}"><em class="icon ni ni-edit"></em><span>Edit Course</span></a></li>
                                                                                        <li><a href="{{route('deleteCourse','id='.$cour->id)}}"><em class="icon ni ni-delete"></em><span>Delete Course</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr><!-- .nk-tb-item -->
                                                        @endforeach
                                                    </tbody>
                                                </table><!-- .nk-tb-list -->
                                            </div>
                                       
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
              
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <div class="modal fade" id="modalCreate">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                {{-- <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a> --}}
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Create Course</h5>
                    <form action="{{route('createCourse')}}" method="post" enctype="multipart/form-data" class="pt-2">
                        @csrf
                        <input type="hidden" name="formateur_id" value="{{auth()->user()->id}}" />
                        <div class="row gy-3 gx-gs">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="course-name">Course Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="name" id="course-name" placeholder="e.g. Responsive Design">
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="course-category">Course category</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select" name="categories">
                                            @foreach ($categories as $item)
                                                <option value="{{$item->id}}"> {{$item->cat_name}} </option>
                                            @endforeach
                                            {{-- <option value="1"> Web </option> --}}
                                        </select>
                                        {{-- <input type="text" class="form-control" name="cat_name" id="course-category" placeholder="e.g. Graphic Design"> --}}
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="dificulties">Course Dificulties</label>
                                    <select name="dificulties" class="form-control" id="dificulties">
                                        <option>Beginners</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                    </select>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="course-lesson">Price</label>
                                    <div class="form-control-wrap">
                                        <input name="price" type="number" class="form-control" id="course-lesson">
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Course</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" name="photo" multiple class="custom-file-input" id="customFile-create">
                                            <label class="custom-file-label" for="customFile-create">Choose file</label>
                                        </div>
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Course image</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" name="photo2" multiple class="custom-file-input" id="customFile-create">
                                            <label class="custom-file-label" for="customFile-create">Choose file</label>
                                        </div>
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Course Description</label>
                                    <textarea name="description" class="form-control"></textarea>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save Informations</button>
                                </div><!-- .form-group -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- .Create Modal-Content -->
    <div class="modal fade" id="modalEdit">
        <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                {{-- <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a> --}}
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Create Course</h5>
                    <form action="{{route('createCourse')}}" method="post" enctype="multipart/form-data" class="pt-2">
                        @csrf
                        <input type="hidden" name="formateur_id" value="{{auth()->user()->id}}" />
                        <div class="row gy-3 gx-gs">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="course-name">Course Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="name" id="course-name" placeholder="e.g. Responsive Design">
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="course-category">Course category</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select" name="categories">
                                            @foreach ($categories as $item)
                                                <option value="{{$item->id}}"> {{$item->cat_name}} </option>
                                            @endforeach
                                        </select>
                                        {{-- <input type="text" class="form-control" name="cat_name" id="course-category" placeholder="e.g. Graphic Design"> --}}
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="dificulties">Course Dificulties</label>
                                    <select name="dificulties" class="form-select" id="dificulties">
                                        <option>Beginners</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                    </select>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="course-lesson">Price</label>
                                    <div class="form-control-wrap">
                                        <input name="price" type="number" class="form-control" id="course-lesson">
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Course</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" name="cours_file[]" multiple class="custom-file-input" id="customFile-create">
                                            <label class="custom-file-label" for="customFile-create">Choose file</label>
                                        </div>
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Course Description</label>
                                    <textarea name="description" class="form-control"></textarea>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save Informations</button>
                                </div><!-- .form-group -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- .Edit Modal-Content -->

    <!-- .Delete Modal-content -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=2.9.1"></script>
    <script src="./assets/js/scripts.js?ver=2.9.1"></script>
    <link rel="stylesheet" href="./assets/css/editors/quill.css?ver=2.9.1">
    <script src="./assets/js/libs/editors/quill.js?ver=2.9.1"></script>
    <script src="./assets/js/editors.js?ver=2.9.1"></script>
</body>

</html>