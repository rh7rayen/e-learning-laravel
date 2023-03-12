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
            @include('admin.includes.sidebar')
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
                                <form action="{{route('updateformateur')}}" method="POST" enctype="multipart/form-data" class="pt-2">
                                    @csrf
                                    <input type="hidden" value="{{$formatteur->id}}" name="id"/>
                                    <div class="row gy-4">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="first-name">Full Name</label>
                                                <input type="text" class="form-control" value={{$formatteur->name}} name="name" id="first-name" placeholder="full name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email" value="{{$formatteur->email}}" id="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="password">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="img">Image</label>
                                                <input type="file" name="img" class="form-control" id="img" placeholder="Choose file">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li>
                                                    <button type="submit" class="btn btn-primary">Save Informations</button>
                                                </li>
                                            </ul>
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