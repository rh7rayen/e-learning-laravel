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
    <title>Instructor List | LMS | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=2.9.1">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.9.1">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('include.sidebar')

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
                                <form action="{{route('updateCourse')}}" method="post" enctype="multipart/form-data" class="pt-2">
                                    @csrf
                                    <input type="hidden" name="cours_id" value="{{$cours->id}}" />
                                    <div class="row gy-3 gx-gs">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="course-name">Course Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="name" value="{{$cours->name}}" id="course-name" placeholder="e.g. Responsive Design">
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
                                                    <option value="Beginners">Beginners</option>
                                                    <option vale="Intermediate">Intermediate</option>
                                                    <option value="Advanced">Advanced</option>
                                                </select>
                                            </div><!-- .form-group -->
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label" for="course-lesson">Price</label>
                                                <div class="form-control-wrap">
                                                    <input name="price" type="number" value="{{$cours->price}}" class="form-control" id="course-lesson">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="form-label" for="thumb">Course</label>
                                                <div class="form-control-wrap">
                                                    <div class="custom-file">
                                                        <input type="file" name="cours_file" multiple class="custom-file-input" id="customFile-create">
                                                        <label class="custom-file-label" for="customFile-create">Choose file</label>
                                                    </div>
                                                </div>
                                            </div><!-- .form-group -->
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="thumb">Course Description</label>
                                                <textarea name="description" class="form-control">{{$cours->description}}</textarea>
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
                <!-- content @e -->
                <!-- footer @s -->
              
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->

    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=2.9.1"></script>
    <script src="./assets/js/scripts.js?ver=2.9.1"></script>
</body>

</html>