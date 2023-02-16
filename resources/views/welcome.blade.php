<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <!-- Fonts -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>



    <style>
        .glyphicon {
            margin-right: 5px;
        }

        .thumbnail {
            margin-bottom: 20px;
            padding: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }

        .item.list-group-item {
            float: none;
            width: 100%;
            background-color: #fff;
            margin-bottom: 10px;
        }

        .item.list-group-item:nth-of-type(odd):hover,
        .item.list-group-item:hover {
            background: #428bca;
        }

        .item.list-group-item .list-group-image {
            margin-right: 10px;
        }

        .item.list-group-item .thumbnail {
            margin-bottom: 0px;
        }

        .item.list-group-item .caption {
            padding: 9px 9px 0px 9px;
        }

        .item.list-group-item:nth-of-type(odd) {
            background: #eeeeee;
        }

        .item.list-group-item:before,
        .item.list-group-item:after {
            display: table;
            content: " ";
        }

        .item.list-group-item img {
            float: left;
        }

        .item.list-group-item:after {
            clear: both;
        }

        .list-group-item-text {
            margin: 0 0 11px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="well well-sm">
            <strong>Display</strong>
            <div class="btn-group">
                <a href="#" id="list" class="btn btn-default btn-sm"><span
                        class="glyphicon glyphicon-th-list">
                    </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                        class="glyphicon glyphicon-th"></span>Grid</a>
            </div>
        </div>


        
        <h1 class="text-center animate__animated animate__bounceInDown ">platos Especiales </h1>
        <div id="products" class="row list-group">
            @foreach ($products as $product)
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="{{ $product->image }}  " />
                        <div class="caption text-center">
                            <h4 class="group inner list-group-item-heading">{{ $product->name }}</h4>
                            <p class="group inner list-group-item-text">{{ $product->description }}</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <p class="lead">Precio: {{ number_format($product->price, 0) }}</p>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <p class="lead">Cantidad: {{ $product->quantity }}</p>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <a href="{{ url('show-product/'.$product->id) }}" class="btn btn-success">comprar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#list').click(function(event) {
                event.preventDefault();
                $('#products .item').addClass('list-group-item');
            });
            $('#grid').click(function(event) {
                event.preventDefault();
                $('#products .item').removeClass('list-group-item');
                $('#products .item').addClass('grid-group-item');
            });
        });
    </script>




<div class="panel panel-default mt-5 ml-4">
        <div class="panel-body">
            <div class="container">



<div  class="form-check aling-center">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
   acepta terminos y condicones
      </label>
 
    </div>
  </div>


  <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
     Terminos y condiciones ver 
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> <p>Qué debo hacer si tengo un sitio web de comercio electrónico? ¿Se recomienda crear un documento de términos y condiciones?
Sí. De hecho, no solo es recomendable, sino que a menudo es obligatorio.

Los términos y condiciones no solo son de vital importancia para protegerte de posibles responsabilidades, sino que también contienen información legalmente obligatoria, como los derechos del usuario y las políticas de devolución, desistimiento o cancelación..

Por lo general, un sitio web/app debe tener un documento de Condiciones de servicio válido y preciso siempre que estén en juego problemas complejos, como es el caso del comercio electrónico, donde se trata información confidencial como los datos de pago.

En los sitios web de comercio electrónico, las Condiciones de servicio suelen ser el documento que contiene la información relacionada con las condiciones de venta y los medios de pago, envío, entrega, condiciones de cancelación y desistimiento, etc., como lo requieren las regulaciones de protección al consumidor. Los proveedores europeos de servicios B2C (venta de bienes/servicios) también deben incluir, entre otras cosas, información sobre la resolución de litigios en línea (RLL) para explicar el proceso obligatorio de resolución de disputas online.

💡 Puedes leer más información sobre los requisitos del comercio electrónico aquí.

¿Puedo utilizar una plantilla de términos y condiciones?
A pesar de lo sencillos que parecen, los términos y condiciones están pensados para cumplir con casos increíblemente complejos y muy específicos. Como cada documento de términos y condiciones es un contrato legalmente vinculante cuyo objetivo es protegerte a ti, como titular de la empresa, es de suma importancia que el documento coincida con tus procesos comerciales específicos y con tu modelo de negocio, y que se mantenga actualizado con las diversas leyes a las que se hace referencia en tu contenido. Las plantillas, simplemente, no son capaces de hacer esto. Por lo tanto, te recomendamos encarecidamente que evites utilizarlas. Lee nuestra respuesta ampliada a esta pregunta aquí.

¿Qué diferencia hay entre los Términos y Condiciones, las Condiciones de Servicio y las Condiciones de Uso?
En general, no hay diferencia legal. Los términos y condiciones, las condiciones de servicio y las condiciones de uso son nombres que se utilizan para hacer referencia al mismo documento. El nombre concreto utilizado es simplemente una cuestión de preferencia.

Política de privacidad y términos y condiciones: ¿cuál es la diferencia entre estos dos documentos legales?
La política de privacidad y los términos y condiciones son acuerdos legalmente vinculantes, pero:

La política de privacidad es legalmente obligatoria en casi todo el mundo. Protege a tus usuarios informándoles de manera legalmente vinculante sobre cómo utilizas sus datos personales de acuerdo con las leyes de privacidad aplicables. Si bien te da cierto margen de maniobra sobre cuestiones como el manejo de solicitudes de “No rastrear”, generalmente tiene como objetivo proteger a los usuarios (encuentra más información en nuestro Resumen de los requisitos legales).
Los términos y condiciones están destinados a proteger a la empresa (a ti). Te ofrecen la posibilidad de definir (dentro de la ley aplicable) las condiciones de uso de tu web o servicio, incluidas las disposiciones sobre derechos de autor o límites de edad y la ley que rige el contrato. Si bien no siempre son obligatorios, como sucede con la política de privacidad, es esencial proteger tus intereses como titular de una empresa.
Nuestro plan Ultra incluye todas las ventajas del Pro, lo que te permite:

crear una política de privacidad y cookies
crear un documento de términos y condiciones
utilizar la Cookie Solution hasta 25.000 páginas vistas/mes
para un sitio web/app en un idioma. Consulta nuestros precios para obtener más detalles</p> e m also worth noting that just about any HTML can go within the <code>.accordion-body</code>,  transition does limit overflow.
    
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa obcaecati inventore nihil minus quam perferendis dolor quo molestias nam quia doloremque, atque quos omnis ullam, rem voluptatum commodi dolorum libero quaerat possimus reiciendis. Omnis laudantium quibusdam ipsam. Perspiciatis voluptas sed ipsa animi suscipit optio sequi ut minus id? Qui ab, magni tenetur fuga sunt nam! Accusamus neque magnam velit, nesciunt eligendi sapiente unde saepe recusandae totam ullam consequuntur veritatis maiores rem. Placeat corporis eos quasi quae nemo accusamus veritatis nam provident perspiciatis, aut necessitatibus ex, consequuntur harum soluta voluptatibus reiciendis totam? Illum recusandae magni modi esse temporibus et consectetur, eaque incidunt dolore nisi saepe quod sunt maiores sapiente cupiditate voluptas molestias ratione repudiandae! Rerum vero perspiciatis voluptas voluptatibus amet deserunt temporibus esse quas necessitatibus, itaque doloribus! Quas dolores aperiam quod ut, voluptatibus quos inventore libero magni sequi vel eius recusandae velit, odit quasi rerum! Culpa nemo accusantium neque aut perspiciatis! Ullam dolorem, rerum deleniti, numquam rem aliquid eaque eum doloremque, soluta sint obcaecati cum. Nisi provident fugit pariatur aut dolores voluptates iste quibusdam, magnam corporis expedita illo officia voluptatum ut ea doloremque atque soluta possimus fuga sint incidunt quaerat voluptas repellendus. Ullam totam rem dolore, blanditiis molestias culpa id quae veniam, laborum officiis aut porro eaque laudantium debitis soluta nulla, adipisci animi quas voluptates repudiandae harum. Ipsa necessitatibus libero vitae, architecto explicabo quibusdam eaque at doloribus odit veniam pariatur ad tenetur ex a reiciendis ipsum minima nemo totam iure commodi ducimus mollitia. Officia hic eaque omnis rerum numquam necessitatibus consequatur beatae, ratione reprehenderit laboriosam harum dignissimos, magnam, recusandae ut nulla qui veniam unde. Minima ratione dicta aliquam aperiam corrupti? Beatae cum ullam qui distinctio aperiam! Dolores, doloribus recusandae nam ullam velit unde mollitia repudiandae quis? Soluta sunt modi tenetur. Necessitatibus dolorem facilis quas suscipit consequuntur. Pariatur commodi quo in, vero sequi esse numquam impedit, suscipit dignissimos possimus quod non earum eius beatae quis porro facere ducimus iusto nostrum eum excepturi. Eveniet doloribus similique dolore accusantium unde consequatur amet ea aperiam repudiandae eos! Voluptatum repudiandae vel repellat numquam explicabo? Est voluptatum impedit neque? Alias maxime harum soluta natus consectetur repudiandae atque voluptatibus consequatur qui. Nulla placeat assumenda voluptatem quas voluptate facere, repellendus saepe, ut animi aliquam, ratione iusto iure doloremque totam! Consectetur sapiente, maiores modi exercitationem libero veritatis cumque impedit ducimus provident quod a, quae quos sunt, dolorem aliquam quia dicta sequi vitae qui explicabo? Voluptatem voluptatum modi ducimus similique perferendis iure corrupti cupiditate obcaecati libero harum placeat ipsum nobis aperiam quo ea rem ratione deleniti officia, cum unde? Numquam suscipit enim fuga, perspiciatis officia eligendi dolorem est placeat accusantium recusandae, incidunt minus voluptatem dolorum esse itaque aut dignissimos ut, temporibus vel earum ducimus consequatur explicabo saepe! Voluptas assumenda ad laborum quasi. Harum cum reprehenderit vel, molestias neque quis, suscipit magnam quaerat sapiente odio quidem! Nisi at atque temporibus assumenda inventore fugiat molestiae, iure perspiciatis pariatur ducimus optio voluptatibus enim maxime quod mollitia dolor odio voluptatem, non quia exercitationem totam, quo dolore similique tempora. Deserunt ad amet facere, culpa dignissimos nulla incidunt, nam dolore et quas sint! Cupiditate consectetur doloremque et fuga dicta nihil, at optio ipsum magnam dolorum dolor eum. Ipsam neque laboriosam non reiciendis error odio praesentium consequatur dolore, quas incidunt dolorum, illo blanditiis dolores doloremque, architecto tempora repellendus enim ipsum. Consequuntur reprehenderit fugiat autem nemo labore ipsam expedita tenetur consectetur sapiente, beatae, cupiditate sit quod ea quo officiis necessitatibus. Culpa, facilis quis, fugiat minus, molestiae itaque quibusdam et odio repellendus eius excepturi vel eveniet numquam eligendi ea modi doloremque dolorum eum aliquid rem earum ut nobis iusto. Quibusdam sequi ex explicabo itaque, eveniet necessitatibus? Nulla, vel? Fuga repellat accusantium alias tempore, voluptas officiis labore quod dolore dolorum dolorem aliquam ab consectetur perferendis cumque adipisci neque laboriosam omnis nam sequi saepe perspiciatis qui? Quo, totam. Qui totam perspiciatis corrupti porro accusamus ad sapiente. Minus, hic distinctio sunt iure quod nisi quo provident quasi nihil eum quas voluptatibus voluptates nobis ducimus corrupti dicta ea veritatis incidunt ullam inventore consectetur? Iure, placeat earum? Ea hic voluptatem vero libero, ullam impedit suscipit sint, non expedita nihil natus labore repudiandae eos distinctio deserunt laudantium modi accusamus, iste deleniti possimus molestiae enim iure praesentium? Temporibus iste eum, at corporis atque natus debitis libero ducimus pariatur aliquam eveniet nisi laboriosam consequatur saepe nihil dolore voluptatum! Sit ullam autem fugit nisi dolores quasi illo quae officia provident, expedita a deleniti repellat est. Velit, consectetur odit similique explicabo doloremque ducimus ut impedit reprehenderit nobis quasi vero quo veniam eos officiis assumenda cum quisquam. Corrupti consequatur excepturi repellat quo inventore accusamus veritatis beatae ipsum, optio aliquid nulla officia temporibus nemo aut recusandae repellendus architecto itaque iure repudiandae voluptates placeat harum. Quas pariatur dolores facere ducimus est ab modi quia, autem quos consequuntur! Sunt molestiae tenetur voluptates sapiente ducimus excepturi, facere iure odit corrupti iste ipsam itaque inventore ipsa autem nam quaerat debitis ipsum quidem? Sit provident error doloribus quo blanditiis? Saepe quae dolores voluptates placeat iure id corrupti alias omnis eaque maiores pariatur repellat labore, facilis enim error nobis repellendus natus vero quidem assumenda! Officia, voluptatibus amet! Nesciunt nulla vitae doloribus earum sint. Dolorem corporis porro illo quaerat quod modi deserunt ipsum expedita quos pariatur commodi sunt, ex nulla asperiores consectetur laborum quidem exercitationem voluptatem dolor excepturi qui molestias recusandae eius. Odit veritatis commodi provident soluta ipsum placeat sint voluptate officiis distinctio deleniti non repudiandae iste at illum, dolores dicta ab accusantium error esse excepturi, quae corrupti consequuntur. Deserunt, blanditiis rerum! Delectus eaque nisi libero odit ad omnis temporibus est reprehenderit quidem, excepturi optio fugit eveniet inventore quae consectetur aut perspiciatis. Repellendus nihil nobis sit ipsum quisquam, provident aspernatur accusantium? Laborum numquam quod porro laboriosam vero voluptate quos. Officia tempore nisi reprehenderit excepturi ipsum dolore, rerum magni est nostrum placeat consectetur velit nulla molestias reiciendis eveniet dolorum. Quam corrupti, saepe earum officia ab voluptatem doloribus. Veniam, porro eligendi voluptatibus quia blanditiis sunt. Fugiat consequatur molestias deleniti voluptas voluptates, iste voluptatibus fugit ea quidem optio, delectus accusantium nesciunt autem excepturi adipisci sint voluptate? Impedit distinctio similique quo quasi ratione quidem animi sed! Quibusdam quis magnam ipsa perferendis dolores molestiae earum, repellendus vitae repellat quos voluptate nihil aliquid esse! Corporis porro veniam earum delectus ipsa dignissimos corrupti. Culpa rerum ab, blanditiis dicta quisquam autem voluptates voluptatibus, ducimus voluptatem nemo laudantium quo! Similique, eveniet. Fugit perferendis, minus, architecto earum delectus molestiae aliquam a provident optio fuga est voluptas, nostrum consequuntur assumenda? Quibusdam, quidem quo. Aliquid, iure repellat. Facere unde in sunt dolor optio. Sapiente, ad harum laudantium at ut iste aspernatur inventore aut quae fugiat distinctio quisquam, molestiae eum voluptatem ipsa! Totam quaerat voluptates cumque adipisci soluta est nostrum doloremque, optio dicta nam fugiat sapiente rerum suscipit natus earum assumenda porro maxime blanditiis ducimus tempore consequuntur autem! Vel autem harum, deserunt, nam nobis illo expedita amet repudiandae dignissimos earum iste, assumenda recusandae quod libero ipsa! Dolorem reiciendis recusandae aut esse officiis magni ullam earum corrupti exercitationem officia ipsam, eveniet quam animi, aspernatur deserunt praesentium itaque nulla fugiat assumenda unde nobis. Inventore, quasi. Nulla, voluptatum dolor. Aspernatur, nesciunt id iste non cumque, dolorum architecto aliquam facilis quaerat explicabo eos inventore nemo officia sequi est omnis perferendis vitae placeat, eaque atque aliquid harum. Vitae distinctio sequi vero laborum quos perferendis illo sapiente repellat magni atque architecto odit accusamus, temporibus explicabo quibusdam blanditiis, error suscipit ullam excepturi cupiditate, consectetur quam dolorum! Fuga eligendi eos, nihil suscipit quasi sunt. Delectus commodi tempora velit quos exercitationem repellat, beatae unde itaque, ullam voluptatibus, illum consectetur inventore vel earum adipisci. Quos, ut ea? Quidem, magnam alias culpa temporibus porro quae architecto accusamus inventore quasi. Quod natus alias vel odit animi asperiores pariatur maiores nulla, illo mollitia minima provident qui nobis voluptas ratione atque recusandae tenetur. Quos odit numquam quibusdam ex alias debitis dolore porro non impedit, atque cum laboriosam explicabo illum aperiam ea consequuntur ullam. Aperiam expedita vitae iure quod dolor temporibus porro minus numquam ab sit! Ducimus adipisci, et possimus, a unde fugiat distinctio voluptas sint, temporibus animi dolorum repudiandae. Suscipit a temporibus corrupti nihil ipsum eius. Quisquam, necessitatibus minus? Neque ipsa accusantium asperiores quis molestiae, architecto dicta maxime officiis consequuntur iusto inventore sequi, quae nobis veniam iste? Qui distinctio officiis, temporibus explicabo, provident delectus laudantium odio quibusdam adipisci error expedita placeat sed atque eveniet natus enim veritatis! Quam unde cupiditate nisi, ea architecto et, voluptatem vel labore magnam vero corporis temporibus tempora sapiente explicabo ab. Atque optio sequi itaque harum fugit quis dolores magni aliquam labore quidem nemo praesentium enim ducimus soluta, animi neque fugiat nisi blanditiis. Laborum ipsum veniam commodi possimus eos magni unde deleniti sequi eum vitae beatae, quae inventore corrupti placeat, quasi quo maxime. Perferendis iusto quam, porro doloremque officiis veritatis, reiciendis animi officia sapiente, quas eveniet eligendi dicta. Nam placeat culpa pariatur eum cum harum nesciunt aliquam veniam necessitatibus. Autem, itaque ea accusantium perferendis in quaerat? Quam, repudiandae harum. Accusamus eum repellendus, quo doloremque deleniti voluptatibus voluptatem quibusdam quos id facilis illo eaque reiciendis earum pariatur, blanditiis minima dolorum debitis illum impedit minus molestiae cumque veritatis? Saepe quo velit rerum ratione, repellat blanditiis nostrum dolore, illum, unde a praesentium optio? Inventore dolores nulla a eos, facere aliquam consequuntur, odio rerum beatae sit fugit illum! Ipsa, possimus asperiores! Ea amet atque soluta neque reiciendis hic facilis pariatur sapiente dignissimos debitis odit possimus, voluptate ex obcaecati veritatis aliquid excepturi ducimus et rem sequi sunt eaque earum facere fugit. Optio exercitationem blanditiis cum accusantium dignissimos, labore recusandae magnam corporis quod sint maxime delectus odit aliquid. Quasi, quae earum, id blanditiis doloremque nesciunt doloribus iste modi itaque possimus excepturi dolorum, aperiam quisquam illum et. Earum fuga, iste sequi consequatur enim facilis voluptate reiciendis in saepe, deserunt consequuntur odio rem excepturi dolore. Accusamus nihil amet perferendis consequatur voluptatum. Aperiam eaque nemo accusantium, libero itaque error sit et perferendis est animi rerum velit sunt eius veniam ipsa architecto atque dolores rem optio quod sapiente. Architecto repudiandae, possimus mollitia itaque labore facilis animi ipsum? Similique culpa dicta fuga accusamus, distinctio harum minus repellat temporibus quidem. Quidem atque ducimus doloremque voluptates sequi non obcaecati ullam, illum odit! Id veniam sint totam numquam laudantium nisi saepe voluptates vitae alias rerum? At vero nemo blanditiis sit reprehenderit facilis eum magni, commodi libero rem cum sunt? Provident quae mollitia sint fugit, commodi obcaecati odit saepe tempore temporibus quod minus asperiores distinctio nobis aut ad cupiditate dolore quibusdam, rem quos vero in inventore ut. Totam, natus mollitia molestiae exercitationem corporis placeat magni impedit quas eius assumenda similique est ullam architecto officia iste suscipit doloremque. Fugit provident adipisci eaque recusandae odit enim explicabo ex iste facere quae molestiae qui, minima nisi nemo delectus sit numquam optio sapiente sequi autem molestias, voluptate earum tempore! Neque quas quos atque debitis eum architecto nostrum, eveniet pariatur repellat commodi cum hic, laboriosam autem laborum adipisci reprehenderit fuga culpa harum nemo sed ex officiis, incidunt nam minus. Similique excepturi quod dignissimos quisquam, consequatur fuga expedita atque sed recusandae laudantium eos, maiores minus molestias culpa! Beatae adipisci facere harum natus atque cum, odit tenetur reiciendis est et quae quaerat repellat incidunt sit maxime voluptatibus, iste voluptates distinctio inventore eum? Facilis, iure itaque! Id doloremque placeat deserunt totam eaque, suscipit quo quos officia cumque similique. Doloribus earum dolorum magnam quasi qui incidunt asperiores ab corporis cumque maiores? Fugit quas quasi pariatur distinctio eius similique repudiandae maxime eligendi beatae corrupti earum cum animi facilis, quos veritatis, quidem provident culpa error consequatur aperiam. Provident rerum doloribus, illum nostrum mollitia iste. Dolores eos provident hic eveniet est! Quisquam nobis nam laborum aliquam repellat expedita quae mollitia odio inventore at itaque consequuntur, animi aperiam necessitatibus rerum cum, illum officia officiis voluptatum. Quas, a blanditiis labore in ullam ducimus. Voluptates fuga corrupti eos pariatur, fugiat labore ipsam velit illo ipsum doloremque! Quae labore, provident laudantium error eveniet quo reprehenderit esse illum voluptatum modi cupiditate facere aspernatur possimus ea perferendis perspiciatis, deleniti vero nam magni ex voluptas? Fugiat quaerat voluptatibus magni perferendis atque. Et assumenda eaque iure voluptatum expedita sapiente animi, totam tempore dolorem magnam ipsum, magni commodi cumque iusto veniam porro! Suscipit libero nesciunt accusantium reiciendis vel!</p></div>
    </div>
  </div>
  
 
</div>

  </div> 
 </div> 
 </div>
</body>

</html>
