<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";


$sql = "select * from chamados where palavra_chave like '%$filtro%'";

$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);



  ?>



<!DOCTYPE html>
<html>
<head>
	<title>ex de chamado</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Jockey+One|Oswald" rel="stylesheet">
  <meta charset="utf-8">

	<script src='https://code.jquery.com/jquery-3.2.1.js'></script>	


</head>
<body>

	<div class="wrapper">
		<nav>
			<div class="logo">LOGO</div>

			<ul>
				<li><a href="#section1">Home</a></li>
				<li><a href="#section2">Chamado</a></li>
				<li><a href="#section3">Link</a></li>
				<li><a href="#section4">Registro De Chamado</a></li>
				<li><a class="active" href="#">Log In</a></li>
			</ul>
		</nav>
	</div>




		<div id="section1"></div>
		<section class="sec1"></section>

		<div class="content">

		 	<h1>Bem Vindo A Plataforma</h1>
			<h2>Exemplos De chamado</h2>
			<br><br>
			<a href="#section2">Click</a>



		<section class="sec2"></section>
		<section class="container" id="section2">


			
			
	<div class="tabs">
			
	  <div class="tab" onclick="tabFunction(event, 'novo')"
	   id="defaultOpen">NOVO</div>

	  <div class="tab" onclick="tabFunction(event, 'si')">Lorem ipsum</div>

	  <div class="tab" onclick="tabFunction(event, 'co')">Lorem ipsum</div>
	
	  <div class="tab" onclick="tabFunction(event, 'ra')">Lorem ipsum</div>

      <div class="tab" onclick="tabFunction(event, 'bo')">Lorem ipsum</div>

      <div class="tab" onclick="tabFunction(event, 'im')">Lorem ipsum</div>

       <br>
     
      <div class="tab" onclick="tabFunction(event, 'te')">Lorem ipsum</div>

      <div class="tab" onclick="tabFunction(event, 'pr')">Lorem ipsum</div>

      <div class="tab" onclick="tabFunction(event, 'li')">Lorem ipsum</div>

      <div class="tab" onclick="tabFunction(event, 'cor')">Lorem ipsum</div>

      <div class="tab" onclick="tabFunction(event, 'ap')">Lorem ipsum</div>

      <div class="tab" onclick="tabFunction(event, 'tm')">Lorem ipsum</div>



	<div class="show-box">
		<div class="show" id="novo">
			
			

			 <div class="info">

        <h2>!!!!!!!!!</h2>
         <input type="text" id="re" name="re" placeholder="">

         <br>

         <input type="text" id="tel" name="tel" placeholder="TELEFONE">

         <br>

         <input type="text" id="titulo" name="titulo" placeholder="TITULO" value="">

         <br>

         <textarea class="areatexto" placeholder="FAÇA SEU CHAMADO AQUI!"></textarea>
            </div>


		</div>


		<div class="show" id="si">
    

       <div class="info">

         <h2>@@@@@@@</h2>
         <input type="text" id="re" name="re" placeholder="re">

         <br>

         <input type="text" id="tel" name="tel" placeholder="TELEFONE">

         <br>

         <input type="text" id="titulo" name="titulo" value="r, habitant pulvinar porta egestas nostra auctor. netu">

         <br>

         <textarea class="areatexto" placeholder="FAÇA SEU CHAMADO AQUI!">icula potenti enim tempus nisi porttitor, sem suscipit duiverrblandit mattis et platea suspendisse felis donec, interdum vulputate sit dolor duis interdum neque adipiscing hac placerat. 

: </textarea>
            </div>


    </div>


    <div class="show" id="co">
      

       <div class="info">

        <h2>########</h2>
         <input type="text" id="re" name="re" placeholder="RE">

         <br>

         <input type="text" id="tel" name="tel" placeholder="TELEFONE">

         <br>

         <input type="text" id="titulo" name="titulo" value=" t, nibh congue varius curs">

         <br>

         <textarea class="areatexto" placeholder="FAÇA SEU CHAMADO AQUI!">icula potenti enim tempus nisi porttitor, sem suscipit dui viverra blandit mattis et platea suspendisse felis donec, interdum vulputate sit dolor duis interdum neque adipiscing hac placerat. 
 </textarea>
            </div>


    </div>


        <div class="show" id="ra">
      

       <div class="info">

        <h2>######</h2>
         <input type="text" id="re" name="re" placeholder="RE">

         <br>

         <input type="text" id="tel" name="tel" placeholder="TELEFONE">

         <br>

         <input type="text" id="titulo" name="titulo" value="m laoreet, nibh congu">

         <br>

         <textarea class="areatexto" placeholder="FAÇA SEU CHAMADO AQUI!">us vulputate at lacinia elit, habitant eleifend mattis. himenaeos torquent mi ad accumsan fringilla vehicula potenti enim tempus nisi porttitor, sem suscipit dui viverra blandit mattis et platea suspendisse felis donec, interdu
  </textarea>
            </div>


    </div>


    <div class="show" id="bo">
      
      

       <div class="info">

        <h2>$$$$$$$$</h2>
         <input type="text" id="re" name="re" placeholder="RE">

         <br>

         <input type="text" id="tel" name="tel" placeholder="TELEFONE">

         <br>

         <input type="text" id="titulo" name="titulo" value="adipiscing hac placerat. ">

         <br>

         <textarea class="areatexto" placeholder="FAÇA SEU CHAMADO AQUI!">putate at lacinia elit, habitant eleifend mattis. himenaeos torquent mi ad accumsan fringilla vehicula potenti enim tempus nisi porttitor, sem suscipit dui viverra blandit mattis et platea suspendisse felis donec, interdum vulputat
  </textarea>
            </div>


    </div>


     <div class="show" id="im">
      
      

       <div class="info">

        <h2>%%%%%%%%</h2>
         <input type="text" id="re" name="re" placeholder="RE">

         <br>

         <input type="text" id="tel" name="tel" placeholder="TELEFONE">

         <br>

         <input type="text" id="titulo" name="titulo" value="attis et platea suspen">

         <br>

         <textarea class="areatexto" placeholder="FAÇA SEU CHAMADO AQUI!">l condimentum ante odio ultrices tempor, habitant pulvinar porta egestas nostra auctor. netus vulputate at lacinia elit, habitant eleifend mattis. himenaeos torquent mi ad accumsan fringilla vehicula poten
  </textarea>
            </div>


    </div>


         <div class="show" id="te">
      
      

       <div class="info">


        <h2>im tempus nisi porttitor, </h2>
         <input type="text" id="re" name="re" placeholder="RE">

         <br>

         <input type="text" id="tel" name="tel" placeholder="TELEFONE">

         <br>

         <input type="text" id="titulo" name="titulo" value="lacinia elit, habitant eleifend">

         <br>

         <textarea class="areatexto" placeholder="FAÇA SEU CHAMADO AQUI!">msan fringilla vehicula potenti enim tempus nisi porttitor, sem suscipit dui viverra blandit mattis et platea suspendisse felis donec, interdum vulputate sit dolor duis interdum neque adipiscing hac placera
  </textarea>
            </div>


    </div>



  <div class="show" id="pr">
      
      

       <div class="info">


        <h2>platea suspendisse felis doneE</h2>
         <input type="text" id="re" name="re" placeholder="RE">

         <br>

         <input type="text" id="tel" name="tel" placeholder="TELEFONE">

         <br>

         <input type="text" id="titulo" name="titulo" value="platea suspendisse felis done">

         <br>

         <textarea class="areatexto" placeholder="FAÇA SEU CHAMADO AQUI!"> laoreet, nibh congue varius cursus faucibus quam aliquam sollicitudin, bibendum vel condimentum ante odio ultrices tempor, habitant pulvinar porta egestas nostra auctor. netus vulputate at lacinia 
  </textarea>
            </div>


    </div>


  <div class="show" id="li">
      
      

       <div class="info">


        <h2>latea suspendisse felis </h2>
         <input type="text" id="re" name="re" placeholder="RE">

         <br>

         <input type="text" id="tel" name="tel" placeholder="TELEFONE">

         <br>

         <input type="text" id="titulo" name="titulo" value="latea suspendisse felis ">

         <br>

         <textarea class="areatexto" placeholder="FAÇA SEU CHAMADO AQUI!">ibh congue varius cursus faucibus quam aliquam sollicitudin, bibendum vel condimentum ante odio ultrices tempor, habitant pulvinar porta egestas nostra auctor. netus vulputate at lacinia elit, habitant eleife
  </textarea>
            </div>


    </div>


      <div class="show" id="cor">
      
      

       <div class="info">


        <h2>hicula potenti enim tempus nisi</h2>
         <input type="text" id="re" name="re" placeholder="RE">

         <br>

         <input type="text" id="tel" name="tel" placeholder="TELEFONE">

         <br>

         <input type="text" id="titulo" name="titulo" value="hicula potenti enim tempus nisi">

         <br>

         <textarea class="areatexto" placeholder="FAÇA SEU CHAMADO AQUI!">stas bibendum ac ultricies habitant. torquent netus porttitor metus quisque accumsan aliquam laoreet, nibh congue varius cursus faucibus quam aliquam sollicitudin, bibendum vel condiment
  </textarea>
            </div>


    </div>


      <div class="show" id="ap">
      
      

       <div class="info">

        <h2>nia elit, habitant eleifend mattis. hi</h2>
         <input type="text" id="re" name="re" placeholder="RE">

         <br>

         <input type="text" id="tel" name="tel" placeholder="TELEFONE">

         <br>

         <input type="text" id="titulo" name="titulo" value="nia elit, habitant eleifend mattis. hi">

         <br>

         <textarea class="areatexto" placeholder="FAÇA SEU CHAMADO AQUI!"> curabitur auctor accumsan nullam interdum iaculis adipiscing dapibus ornare, vitae scelerisque bibendum conubia mi bibendum tincidunt cursus per iaculis, placerat venenatis dapibus erat egestas bibendum ac ultricies habitant. torquent netus porttitor metus quisque accumsan aliquam laoreet, nibh co
  </textarea>
            </div>


    

		</div>


		<div class="show" id="tm">
			
			

			 <div class="info">

        <h2>umsan fringilla vehicul</h2>
         <input type="text" id="re" name="re" placeholder="RE">

         <br>

         <input type="text" id="tel" name="tel" placeholder="TELEFONE">

         <br>

         <input type="text" id="titulo" name="titulo" value="adipiscing hac placerat. ">

         <br>

         <textarea class="areatexto" placeholder="FAÇA SEU CHAMADO AQUI!"> mi bibendum tincidunt cursus per iaculis, placerat venenatis dapibus erat egestas bibendum ac ultricies habitant. torquent netus porttitor metus quisque accumsan aliquam laoreet, nibh congue varius cursus faucibus quam aliquam sollicitudin, bibendum vel condimentum ante odio ultrices tempor, habitant 

          </textarea>
            </div>

		
	</div>
		</section>




  <section id="section3">
    <h1>LINKS IMPORTANTES</h1>
 

    <div class="link">
    <a href="#" target="_blank">dum atr</a>
    <a href="#" target="_blank">dum ultr d</a>
    <a href=" #" target="_blank">dum ac ultr</a>
    <a href=" #" target="_blank">tate at la</a>
    <a href=" #" target="_blank">tate at la</a>
    <a href= "#" target="_blank">tate at la</a>
    <br>
    <a href="#" target="_blank">tate at la</a>
    <a href="#" target="_blank">tate at la</a>
    <a href="#" target="_blank">tate at lat</a>
    <a href="#" target="_blank">tate at la</a>
    <a href="#" target="_blank">tate at la</a>
    <a href="#" target="_blank">tate at la</a>
  </div>

</section>


<br>



 <form method="post" action="processa.php">

<section class="regs" id="section4">

  <h1>t, nibh congue varius cursus </h1>


    <div class="reg" onclick="regFunction(event, 'registro')" id="default-open"><h3>REGISTRO</h3></div>

    <div class="reg" onclick="regFunction(event, 'cons')" id="default-open"><h3>CONSULTA</h3></div>



<div class="show-boxs">
    <div class="showS" id="registro">

      <input type="submit" value="salvar" class="btnS">
      <input type="reset" value="Limpar" class="btnL"> 
      <br> <br>


       <select name="palavra_chave" class="campo">

          <option value="global">nibh congue</option>
          <option> et platea su</option>
          <option>nte odio ultric</option>
        </select>  
          <br><br> 


           <input type="text" id="prot" name="protocolo" class="campo" placeholder="PROTOCOLO">

         <br>

            <input type="text" id="titu" name="titulo_1" class="campo" placeholder="TITULO" value="">

         <br>

          <textarea class="campoT" name="conteudo" placeholder=""></textarea>
    </div>
 </div>
      </section>
    </form>




<div class="show-boxs">
    <div class="showS" id="cons">


      <div class="info">

        <form method="get" action="">  
          <input type="text"  name="filtro" class="campoP" placeholder="Insira a palavra chave" required autofocus><br>
          <input type="submit" value="pesquisar" class="btnP">


      <?php

       

        print"<br><br><br>";

        print "Resultado com a palavra <strong>$filtro</strong><br>";

        print "$registros registros encontrados.";

        print "<br><br>";


while ($exibirRegistros = mysqli_fetch_array($consulta)) {

  $codigo = $exibirRegistros[0];
  $palavra_chave = $exibirRegistros[1];
  $protocolo = $exibirRegistros[2];
  $titulo_1 = $exibirRegistros[3];
  $conteudo = $exibirRegistros[4];


  print "<article>";

  print "$codigo<br>";
  print "$palavra_chave<br><br>";
  print "$protocolo<br>";
  print "$titulo_1<br><br>";
  print "$conteudo";

  print "</article>";

}

  mysqli_close($conexao);

        ?>

    </div>



<!-- 
 
  -------------codigo js para o navbar ficar opado qundo descer com o scroll  --------------- 

-->



<script type="text/javascript">
	

		$(window).on('scroll', function(){
			
			if($(window).scrollTop()) {
				$('nav').addClass('black');
			}
			else{
				$('nav').removeClass('black');
			}
			


		})
</script>


 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript">
            $(window).on('scroll', function(){
                if($(window).scrollTop()){
                    $('nav').addClass('black') ;
                }
                else{
                    $('nav').removeClass('black');
                }
            })
            

        </script> 
















<!-- 
 
  -------------codigo js para sumir e aparecer a area de chamados  --------------- 

-->


		        <script>
   function tabFunction(evt,novo){
      let i,info,tab;
      show = document.getElementsByClassName("show");
      for(i=0; i < show.length; i++){
        show[i].style.display = "none";
      }
      tab = document.getElementsByClassName("tab");
      for(i=0; i < tab.length; i++){
        tab[i].className = tab[i].className.replace(" active","");
      }
      document.getElementById(novo).style.display = "block";
      evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();
        </script>




















<!-- 
 
  -------------codigo js para sumir e aparecer a area de registro e consulta --------------- 

-->


            <script>
   function regFunction(evt,registro){
      let i,info,reg;
      showS = document.getElementsByClassName("showS");
      for(i=0; i < showS.length; i++){
        showS[i].style.display = "none";
      }
      reg = document.getElementsByClassName("reg");
      for(i=0; i < reg.length; i++){
        reg[i].className = reg[i].className.replace(" active","");
      }
      document.getElementById(registro).style.display = "block";
      evt.currentTarget.className += " active";
    }

    document.getElementById("default-open").click();
        </script>
			
	






</body>
</html>
