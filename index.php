<?php
  include $_SERVER['DOCUMENT_ROOT']."/interactive/_admin/header.php";
?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="js/jquery.dataTables.min.js"></script>
  <meta name="twitter:description" content="Politique et argent: comment les parlementaires romands ont financé leur campagne 2011">




<style>
td.details-control {
    background: url('open.png') no-repeat center center;
    cursor: pointer;
}

.odd:hover{
  
  background:#F2F2F2;
  z-index:999999999999999999999;
}

.odd:{
  
  background:#F2F2F2;
  z-index:999999999999999999999;
   cursor:pointer;
}


.even:hover{
  
  background:#F2F2F2;
  z-index:999999999999999999999;
   cursor:pointer;
}
 
tr.shown td.details-control {
    background: url('close.png') no-repeat center center;
}
 
div.slider {
    display: none;
}
 
table.dataTable tbody td.no-padding {
    padding: 0;
}

.circle-text {
    width:60%;
}
.circle-text:after {
    content: "";
    display: block;
    width: 100%;
    height:0;
    padding-bottom: 100%;
    background: red; 
    -moz-border-radius: 50%; 
    -webkit-border-radius: 50%; 
}

table 
{
    padding-right:60px;
    }

td.details-control {
    display:none;
    }

    tr:hover {
   
    }

    tr 
    {
   text-align:center;
    }

.test 
    {
    background-image: none;
    }
p {
font-size:16px;
}

</style>
</head>
<body>





<br><br><br>
<div class="row" width="100%" style="max-width:1280px">
 
<div class="col-md-2"></div>
<div class="col-md-8" style="text-align:center"><span style="color:#FFF;background-color:#950728;padding:5px 5px 5px 5px;font-family:georgia;text-transform:uppercase;font-size:14px">élections fédérales</span>
 <h1 style="font-family:georgia"> Politique et argent: comment les parlementaires romands ont financé leur campagne 2011</h1>
 <br><span style="font-size:20px;font-family:georgia;text-align:left">A l'occasion des élections fédérales 2015, Le Temps lance une opération au long cours sur la transparence du financement des campagnes des candidats romands. Premier volet: comment les 48 sortants ont financé leur campagne personnelle en 2011.<br><br>

</div>
  <div class="col-md-2"></div>
</div>

<div class="row" width="100%" style="max-width:1280px">
 <br><br>

  <div class="col-md-1"></div>
    <div class="col-md-5"><p style="font-size:16px;font-family:georgia">
    En Suisse, le débat sur la transparence du financement des campagnes politiques revient régulièrement sur le devant de la scène. Personne ne sait réellement comment sont financés les politiciens suisses. <b>Seul moyen de l'évaluer: s'adresser aux candidats eux-mêmes, sans qu'il ne soit possible de vérifier leurs dires.</b>


     <br><br>Afin d’avoir une idée plus claire des relations de nos élus à l’argent, Le Temps a interrogé les 48 candidats romands sortants. Ils ont répondu à un questionnaire détaillé sur leur campagne électorale personnelle 2011. <b>Leurs réponses sont classées par niveau de transparence, par parti et par canton.</b> On y découvre que plus de la moitié des candidats ne mènent pas de campagne personnelle grâce à des donateurs privés. Et que les pratiques varient beaucoup d’un canton à l’autre, tous partis confondus.<br><br>

     <b>Cette enquête est un travail au long cours. </b>Un deuxième volet suivra, sur les sources de financement des partis qui soutiennent leurs candidats, puisque nombre d'entre eux ne mènent pas de campagne personnelle et ne démarchent pas eux-mêmes de donateurs. Enfin, cet automne, nous interrogerons les candidats sur le financement de leur campagne 2015.<br>
<br><a href="http://www.letemps.ch/Page/Uuid/eed642ec-1839-11e5-96f4-d5eb39d18cde/Argent_et_politique_comment_les_parlementaires_romands_financent_leur_campagne" style="color:#950728">ENQUÊTE. Lire notre dossier sur l'argent et la politique </a>
     <a href="http://www.letemps.ch/Page/Uuid/16fd1638-183a-11e5-96f4-d5eb39d18cde/Comment_nous_avons_enquêté_sur_les_finances_des_candidats_aux_élections_fédérales" style="color:#950728"><br>MAKING-OF. Comprendre la méthodologie de notre travail</a></p>
    <br>

  </div>



  <div class="col-md-5" style="margin-left:40px;background-color:#f2F2F2"><big><b><br>Comment fonctionne notre indice de transparence</b></big><br><br><img src="img/green.png" height="20" style="margin-right:5px"><span style="text-transform:uppercase;font-weight:bold">Transparent.</span> Deux cas de figures: le candidat nous a donné accès aux détails du financement de sa campagne personnelle et a répondu à notre questionnaire; le candidat n'a pas mené de campagne personnelle en recherchant des donateurs, sa campagne étant prise en charge par le parti, mais a répondu à notre questionnaire. <br><br>
<img src="img/orange.png" height="20" style="margin-right:5px"><span style="text-transform:uppercase;font-weight:bold">Moyennement transparent.</span> Le candidat nous a communiqué ses sources de financement de manière générale ou partielle. Il a aussi rempli notre questionnaire.<br><br>



<img src="img/red.png" height="20" style="margin-right:5px"><span style="text-transform:uppercase;font-weight:bold">Peu transparent. </span>Le candidat nous a donné un montant global du coût de sa campagne, sans autre explication; a refusé de nous communiquer des informations précises ou de répondre au questionnaire.<br><br>
<img src="img/black.png" height="20" style="margin-right:5px"><span style="text-transform:uppercase;font-weight:bold">Pas de réponse.</span> Le candidat ne nous a pas répondu malgré nos relances.  
<br><br><p style="background-color:#f2F2F2;padding:0;border-top:1px dotted #333"> <br><b>MISE A JOUR</b> (dimanche 21 juin). Ce tableau interactif est évolutif et sera mis à jour régulièrement. Les candidats peuvent nous soumettre leurs corrections et apporter leurs informations complémentaires, leur permettant d'améliorer ainsi leur indice de transparence.</p>
  </div>
  <div class="col-md-1"></div>
  
 
</div>

<hr>
<div class="row" width="100%" style="max-width:1280px">
<div class="col-md-1"></div>
<div class="col-md-7">

<b>ATTENTION</b>. Lorsque les montants des campagnes personnelles sont égaux ou proches de zéro, cela signifie que l'intégralité ou presque de la campagne est financée directement par le parti. Les candidats sont donc de facto transparents. <br><br>
</div>
<div class="col-md-4">
</div></div>
    <script>




 /* Formatting function for row details - modify as you need */
function format ( d ) {
    // `d` is the original data object for the row
    return '<div class="slider">'+
        '<table>'+


           
           
            '<tr style="font-family:georgia">'+
                '<td style="min-width:400px;padding-left:2%;vertical-align:top;">Sa campagne personnelle: '+ d.salary1+' <b>CHF</b><br><span style="margin-top:5px;font-weight:none;font-size:11px;"></span></b><iframe style="padding-top:-10px;" src="'+ d.interview+'" frameborder="0" allowtransparency="true" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="400" scrolling="no" height="450"></iframe><hr><br><span style="margin-top:5px;font-weight:none;font-size:11px;"></span></b><center><iframe style="padding-top:-10px;padding-left:30px" src="'+ d.interview2+'" frameborder="0" allowtransparency="true" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="400" scrolling="no" height="280"></iframe><br></center><br>'+ d.interview3+'</center></td><br><hr></td><br>'+

                '<td style="text-align:left;padding-right:8%;padding-left:4%;"><span style="color:#fff;background-color:#950728;text-transform:uppercase;padding:2px 5px 2px 5px;font-size:14px">QUESTIONS</span><br></b><h2>'+d.titre+'</h2><br>'+
                '<p><b>La transparence du financement des campagnes est-elle importante à vos yeux? </b></p>'+'<p>'+d.rep1+'</p>'+
                 '<p><b>Financez-vous votre campagne vous-même, ou votre campagne est-elle prise en charge financièrement par votre parti?</b></p>'+'<p>'+d.rep2+'</p>'+
                  '<p><b>Quel budget prévoyez-vous pour votre campagne 2015?</b></p>'+'<p>'+d.rep3+'</p>'+
                   '<p><b>Quel était le budget de votre campagne en 2011?</b></p>'+'<p>'+d.rep4+'</p>'+
                   '<p><b>Cherchez-vous ce financement vous-même? Si oui, de quelle manière? </b></p>'+'<p>'+d.rep5+'</p>'+
                 '<p><b>Devez-vous verser un montant à votre parti pour pouvoir figurer sur la liste des candidats? Si oui, à combien s’élève cette somme?</b></p>'+'<p>'+d.rep6+'</p>'+
                  '<p><b>De quelles sources provient l’essentiel du financement de votre campagne?</b></p>'+'<p>'+d.rep7+'</p>'+
                   '<p><b>Quel est le plus gros montant que vous avez reçu au cours de votre carrière politique? Provenait-il d’une personne privée, d’une entreprise, d’une association ou d’un syndicat?  </b></p>'+'<p>'+d.rep8+'</p>'+
                   '<p><b>Pour quelles raisons vous a-t-on fait ce don? </b></p>'+'<p>'+d.rep9+'</p>'+
                 '<p><b>Avez-vous déjà refusé un don? Pour quelle raison?</b></p>'+'<p>'+d.rep10+'</p>'+
                  '<p><b>Vous êtes-vous déjà senti(e) en conflit d’intérêt avec l’un de vos donateurs? </b></p>'+'<p>'+d.rep11+'</p>'+
                   '<p><b>Vous a-t-on déjà demandé de faire quelque chose un échange d’un don, pendant ou après votre campagne?</b></p>'+'<p>'+d.rep12+'</p>'+
                   '<p><b>A votre avis, dans quelle mesure une élection est-elle liée aux montants investis dans la campagne?</b></p>'+'<p>'+d.rep13+'</p>'+

                 
            '</td></tr>'+
          
        '</table>'+
    '</div>';
}
 
$(document).ready(function() {
    var table = $('#example').DataTable( {
        "ajax": "data/objects.js",
        "paging":   false,
        "info":     false,
         "language": {
    "thousands": "'"
  },





       
        "columns": [
            {
          
                "orderable":      true,
                "data":           null,
                "defaultContent": ''
            },
           
           { "data": "img" },
            { "data": "nom" },
             { "data": "position" },
{ "data": "salary" },

            { "data": "color" },
             { "data": "salary1"},
                    { "data": "salary2" },
             { "data": "titre"},
         
            
            
           
     
            
        ],
        "order": [[1, 'asc']]
    } );
     
    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            $('div.slider', row.child()).slideUp( function () {
                row.child.hide();
                tr.removeClass('shown');
            } );
        }
        else {
            // Open this row
            row.child( format(row.data()), 'no-padding' ).show();
            tr.addClass('shown');
 
            $('div.slider', row.child()).slideDown();
        }
    } );
} );

    </script>
    <script>

$(document).ready(function () {
            $("#example").freezeHeader();
        })

        </script>



<br>



<div class="row" width="100%" style="max-width:1280px">

<table id="example" class="display" cellspacing="0" width="100%" style="max-width:1280px;margin-top:43px;padding-right:2%">
        <thead style="background-color:#fff;z-index:99999999999999">
            <tr style="background-color:#fff;z-index:99999999999999">
                
                
               <th style="background-image: none;"></th> <th style="font-weight:normal;background-image: none;"><small><img src="https://cdn0.iconfinder.com/data/icons/phone-communication-glyph-black-i/2048/435_-_Backup__reset-128.png" height="30"></small></th>
                <th style="text-align:center">Nom du candidat</th>
                   <th style="text-align:center">Canton</th>
                 <th style="text-align:center">Parti politique </th>
                <th style="text-align:center">Indice de transparence</th>
                <th style="text-align:center">Montant de la campagne personnelle du candidat 2011</th>
                
                <th style="text-align:center">Financement privé</th>
                  <th style="text-align:center">Lire leurs réponses</th>
              <th style="text-align:center"></th>
              
               <th style="display:none">Salary</th>
            </tr>
        </thead>
 
        
    </table></div>
<div class="row" width="100%" style="max-width:1280px">
 

  <div class="col-md-1"></div>
  <div class="col-md-8" style="margin-top:20px;font-size:16px;font-family:georgia"><b>Crédits :</b> Marie Parvex, Catherine Dubouloz, Alexis Favre, Magalie Goumaz, Yelmarc Roulet, Serge Jubin, Olivier Francey, Jean Abbiateci<br><br></div>
  <div class="col-md-3"></div>
  
 
</div>

<script src="http://www.letemps.ch/r/SysConfig/WebPortal/letemps/js/share.min.js"></script>
</body>