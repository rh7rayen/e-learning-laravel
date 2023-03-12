@extends('layouts.messager');
@section('content')


  <section class="messanger-wrapper" style="margin-left: 100px; !important">
    <div class="container">
      <div class="col-md-9">
    <div class="notif-wrapper col-md-12">

      <div class="section-wrapper" style="margin-top: 30px;">
        <h4 style="color: #269BB0;">Arige Mejhed 7B</h4>
        <div class="cercle-wrapper">
        <span class=" "><i class="fa fa-search fa-2x text-center"></i></span>
        <span class="user"><i class="fa fa-user fa-2x text-center"></i></span>
      </div>
      </div>
      </div>
      <div class="col-md-12 ">
        <div class="profil-wrapper">
          <img src="C:/xampp/htdocs/gestionproduit/img/tel1.jpg" class="img-profil">
          <div class="name-profil">
          <h4>Kaouther Mejhed</h4>
          <h6>Connecté Maintenent </h6>

        </div>
        <div class="icon-parmetre">
          <button class="btnsting" >
          <img src="img/iconparametre.png">
          </button>
        </div>

        </div>
        <div class="discussion-wrapper">
          <div class="jour">
            <hr><h6 class="text-center">Vendredi 5 Février</h6><hr>
          </div>
          <div class="chat" id="chat">











          </div>

        </div>

         <div class="envoye-warpper">
            <div class="col-md-12 formulaire">
              <div class="btnform-wrapper text-center">
@csrf

                <input type="hidden" id="receiver" value="{{$id}}">
                <input type="hidden" id="sender" value="{{$user_id}}">
               <input type="text" id="message"  placeholder="Ecriver un message" class="formemessge" id="input1">

              <button id="send" >envoyer</button>
              </div>


          </div>

          </div>
      </div>
    </div>

  </section>
  <section>
    <div class="setting-box">
      <button class="close"><i class="fa fa-times" aria-hidden="true" style="color: black"></i></button>
      <div class="profil-setting text-center">
      <img src="img/profil.jpg">
      <h4>En ligne</h4>
    </div>
    <ul class="parametre-config">
      <li>Option <button class="flesh"><i class="fa fa-angle-left fa-2x" style="color: #269BB0;"></i></button><br>
        <input type="text" name="" placeholder="Recherche dans les paroles" class="serch-form" id="categorie-filter">
      </li>
      <li class="confidentiel">Confidentiel <button class="flesh1"><i class="fa fa-angle-left fa-2x" style="color: #269BB0;"></i></button>
       <h5>Notifications<span><img src="img/notification.png"></span></h5>
        <h5 style="margin-top: 10px;">Il y a un probléme<span><img src="img/triangle.png"></span></h5>
      </li>
      <li class="fichier">Fichier partagé <button class="flesh3"><i class="fa fa-angle-left fa-2x" style="color: #269BB0;"></i></button>
        <main class="pdf-wrapper" >
       <span ><img src="img/doc.png"style="padding: 5px"><a href="#">mathématique</a></span>
        <span><img src="img/doc.png"style="padding: 5px"><a href="#">physique</a></span>
         <span><img src="img/doc.png"style="padding: 5px"><a href="#">anglais</a></span>
         <span><img src="img/doc.png"style="padding: 5px"><a href="#">arabe</a></span>
       </main>






      </li>
      <li>Image partagé <button class="flesh4"><i class="fa fa-angle-left fa-2x" style="color: #269BB0;"></i></button>
       <main class="image-historique">

          <img src="img/01.jpg">


            <img src="img/02.jpg">


            <img src="img/03.jpg">


          <img src="img/01.jpg">


            <img src="img/02.jpg">


            <img src="img/03.jpg">
            <img src="img/03.jpg">
            <img src="img/03.jpg">
            <img src="img/03.jpg">
            <img src="img/03.jpg">
            <img src="img/03.jpg">
            <img src="img/03.jpg">
            <img src="img/03.jpg">
            <img src="img/03.jpg">
            <img src="img/03.jpg">


       </main>

      </li>
    </ul>

    </div>
  </section>
  @section('script')
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script type="application/javascript">

function load() {
        var sender = document.getElementById('sender').value;
        var receiver = document.getElementById('receiver').value;
        var content = document.getElementById('chat');

        axios.get('/getmessage/'+receiver).then((res) => {
            content.innerHTML = '';
            for (var i = 0; i < res.data.length; i++) {
                if(res.data[i]['user_id']==sender){
content.innerHTML+=`<div class="perso-num1">
        <div class="image-profile">
  <img src="http://127.0.0.1:8000/assets/uploads/${res.data[i]['image_profile']}">
  </div>

              <div class="message-pers1">
                <div class="triangle-content">

               <span class="triangle"></span>

              </div>
              <div class="chat-pers1">
                <span>${res.data[i]['message']} </span>

             </div>
             <div class="supp-parmetre">
              <div class="suprimer" id="suprimer"><a href="">supprimer</a></div>
              <div class="cercle-content" id="cercle-content">
              <main class="cercle-1 cercle"></main>
              <main class="cercle-2 cercle" > </main>
               <main class="cercle-3 cercle"></main>
             </div>
             </div>



              </div>

            </div>`
        }
        else
        {
            content.innerHTML+=`<div class="perso-num2">
        <div class="image-profile">
  <img src="http://127.0.0.1:8000/assets/uploads/${res.data[i]['image_profile']}">
  </div>

              <div class="message-pers1">
                <div class="triangle-content">

               <span class="triangle"></span>

              </div>
              <div class="chat-pers1">
                <span>${res.data[i]['message']} </span>

             </div>
             <div class="supp-parmetre">
              <div class="suprimer" id="suprimer"><a href="">supprimer</a></div>
              <div class="cercle-content" id="cercle-content">
              <main class="cercle-1 cercle"></main>
              <main class="cercle-2 cercle" > </main>
               <main class="cercle-3 cercle"></main>
             </div>
             </div>



              </div>

            </div>`
        }
    }
 })

    }

    document.getElementById('send').addEventListener('click', onClick)

function onClick() {


    var sender = document.getElementById('sender').value;
    var receiver = document.getElementById('receiver').value;
    var message = document.getElementById('message').value;
    var token = document.querySelector('input[name="_token"]').value;
    var data = {
        sender: sender,
        receiver: receiver,
        message: message,
        _token: token,
    }
    axios.post('/sendmessage', {
        data
    }).then((res) => {

        document.getElementById('message').value = "";

        load();
    })

}


    setInterval(() => {
        load();
    }, 5000);

</script>
