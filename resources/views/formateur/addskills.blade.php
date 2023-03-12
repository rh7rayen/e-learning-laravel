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
            <section>
                <div class="col-lg-12" style="float: right">
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                    {{session()->get('success')}}
            
                    </div>
                    @endif
                   
            
                    
            </section>
 <div class="col-lg-12">
                <div class="card" >
                    <form action="/formateur/finalskills" method="post">
                         @csrf

                    <div class="card-body">
                        <div class="row mb-3">

                            <div class="col-sm-9 text-secondary">
                                <input type="hidden" class="form-control" name="id" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                
                                <h6 class="mb-0">skills</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <span>nom de skills</span>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">skills</h6>
                            </div>
                            <select class="form-controller" name="procentage" aria-label="Default select example">
                                <span>porcentage de skkils</span>
                                <option selected>Open this select menu</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>


                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="60">60</option>
                                <option value="70">70</option>
                                <option value="80">80</option>
                                <option value="90">90</option>
                                <option value="100">100</option>
                            </select>
                        </div>



                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                               <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>

                <script src="./assets/js/bundle.js?ver=2.9.1"></script>
    <script src="./assets/js/scripts.js?ver=2.9.1"></script>
    <link rel="stylesheet" href="./assets/css/editors/quill.css?ver=2.9.1">
    <script src="./assets/js/libs/editors/quill.js?ver=2.9.1"></script>
    <script src="./assets/js/editors.js?ver=2.9.1"></script>
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
</body>

</html>