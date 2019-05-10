<?php
include 'baza.php';

?>
<html>

<title>Test1</title>

<head>
    <link rel="stylesheet" type="text/css" href="materialize.css" />
    <link rel="stylesheet" type="text/css" href="Task1" />
    <script type="text/javascript" src="jquery-3.2.1.js"></script>
    <script type="text/javascript" src="materialize.js"></script>
    <script type="text/javascript" src="Task.js"></script>

</head>



<body>



    <nav id="bg1">

        <div class="nav-wrapper">
            <h4 id="tab">Moj drugi materijal</h4>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            </ul>
        </div>
    </nav>
    
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Korisnicko ime</th>
            <th>E-mail</th>
            <th>Aktivan</th>
        </tr>
    </thead>
    </table>
    
   
  <?php
    include 'users.php';
?>
   


 

    

    <nav class="nav-extended" id="bg1">
        <div class="nav-wrapper">

            <h4 id="tab">Nemanja Pajic</h4>

            
 
<div class="fixed-action-btn">



  <a class="btn-floating btn-large green btn modal-trigger " type="submit" href="#modal1">
    <i class="large material-icons">+</i></a>
</div>
  <div id="modal1" class="modal">
    <div class="modal-content">
    <h4>Dodavanje korisnika</h4>
    <form action="insert.php" method="post">

    <div class="col s12 m4 l4">
    
            <input type="text" ; placeholder="Unesite ime"; name="first_name">

        </div>
        <div class="col s12 m4 l4">

        
            <input type="text" ; placeholder="Prezime"; name="last_name">
           
        </div>
        <div class="col s12 m4 l4">
        
            <input type="text" ; placeholder="Korisnicko ime"; name="user_name">

        </div>
        <div class="col s12 m4 l4">
        
            <input type="text" ; placeholder="Email" name="email">
            
        </div>
        <div class="switch">
    <label>
      Neaktivan
      <input type="checkbox">
      <span class="lever"></span>
      Aktivan
    </label>
  </div>
    </div>
  <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Odustani</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat" type="submit" method="post">Dodaj</a>
</form>
      </div>
  </div>
</div>

            <ul id="nav-mobile" class="right hide-on-med-and-down">

            </ul>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent">

                <p id="tab">9.5.2019.</p>

            </ul>
        </div>
    </nav>

</body>

</html>
