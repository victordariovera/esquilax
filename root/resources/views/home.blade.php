@extends('layouts.app')
@section('content')
<body class="vertical-design">
<div class="container">

  <div class="nav-vertical">
    <div class="nav-vertical-logo">
      <img class="nav-vertical-logo" src="img/esquilax_logo_small.svg">
    </div>
    <div class="nav-vertical-links">
    <ul>
      <li><img class="nav-vertical-link-icon" alt="Guardias" title="Guardias" src="./img/phone-line.svg"></li>
      <li><img class="nav-vertical-link-icon" alt="Integraciones" title="Integraciones" src="./img/cloud-line.svg"></li>
      <li><img class="nav-vertical-link-icon" alt="Remediaciones" title="Remediaciones" src="./img/medicine-bottle-line.svg"></li>
      <li><img class="nav-vertical-link-icon" alt="Ajustes" title="Ajustes" src="./img/settings-3-line.svg"></li>
      <li><a  href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><img class="nav-vertical-link-icon" alt="Salir de Esquilax" title="Salir de Esquilax" src="./img/logout-box-line.svg"></a></li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
  </div>

  </div>
  <div class="content-vertical">

    <div class="content-section">
      <h1>Gran Titulo</h1>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur saepe vel asperiores in corrupti atque illo, itaque quae laboriosam beatae adipisci maiores totam harum dolor, doloribus natus qui cum ullam!
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam qui est quod numquam, placeat, rem perspiciatis nam excepturi similique eligendi adipisci aliquid, tempore quaerat! Beatae, voluptatibus praesentium? Optio, esse eaque?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente perspiciatis culpa sequi nam alias distinctio fuga ea voluptate dignissimos, esse aliquid illo possimus quisquam iusto tenetur ad officiis adipisci. Labore.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui magni esse nemo cum quasi corporis in consequatur libero. Accusantium tempore rem fuga laboriosam aspernatur vel ad, suscipit ipsa optio officiis.
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero est animi voluptatibus quisquam molestias accusamus sed omnis labore. Soluta vitae aliquam porro repellendus laudantium tenetur omnis aspernatur expedita, possimus voluptates.
      </p>
      </div>

      <div class="content-section">
        <h1>Gran Titulo</h1>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur saepe vel asperiores in corrupti atque illo, itaque quae laboriosam beatae adipisci maiores totam harum dolor, doloribus natus qui cum ullam!
        </p>
        </div>

        <div class="content-section">
          <h1>Gran Titulo</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur saepe vel asperiores in corrupti atque illo, itaque quae laboriosam beatae adipisci maiores totam harum dolor, doloribus natus qui cum ullam!
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. A accusantium minus architecto doloremque atque excepturi officiis. Itaque et neque facilis est explicabo architecto, similique maiores minima magnam rerum, veritatis natus!
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus aut optio totam a itaque? Quidem, amet. Maiores, praesentium nemo? Impedit sed vero quis nihil tempora illo aut magni saepe eligendi!
             Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, accusamus repudiandae, minus voluptates, labore dignissimos sit illum eveniet sapiente voluptate quae alias? Asperiores dignissimos facere nostrum natus iste illo sed.
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt labore perspiciatis impedit possimus doloribus dolorem suscipit pariatur, quasi nam architecto et fuga obcaecati vero expedita, blanditiis sapiente quidem, dolores cum!
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi eaque earum, hic consequatur debitis sint expedita ex voluptate sit sed nobis numquam impedit aut fugiat voluptates, odio rerum a quaerat.
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates id numquam iste veniam pariatur harum laborum ad ipsam quae obcaecati? Dolorem dicta aspernatur recusandae nisi quas, ullam rem nihil saepe.
             Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem expedita recusandae optio ea veritatis amet cum consectetur! Vero, suscipit nostrum. Cupiditate rem libero perferendis possimus dolorum, natus ut sit temporibus.
          </p>
          </div>
          <div class="content-section">
            <h1>Gran Titulo</h1>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur saepe vel asperiores in corrupti atque illo, itaque quae laboriosam beatae adipisci maiores totam harum dolor, doloribus natus qui cum ullam!
            </p>
            </div>
            <div class="content-section">
              <h1>Gran Titulo</h1>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur saepe vel asperiores in corrupti atque illo, itaque quae laboriosam beatae adipisci maiores totam harum dolor, doloribus natus qui cum ullam!
              </p>
              </div>



  </div>

</div>
</body>
@endsection
