<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta tags -->
  @include('partial.headtag')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">
  <!-- favicon ico -->
  <link rel="stylesheet" href="{{ asset('favicon.ico') }}">
  <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
  <!-- Local CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/health.css') }}">
  <!-- Title -->
  <title>{{ env('APP_NAME', 'SenKu') }}</title>
</head>
<body id="page-top">
  <!-- <section class="login" style=" background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('assets/images/background.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; height: 100vh;">
  <div class="container"> -->

  <!-- login start -->
  <section class="h-100 health" style="background-color: #eee;">
    <div class="container py-5 h-100">

      <!-- nav start -->
      @include('partial.navbar')
      <!-- nav end -->

      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xs-12 col-sm-12 col-lg-12 col-xl-12">
          <div class="card text-black mt-5" style="height: 80vh; background: transparent; border: 0;">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-lg-12 putih-2" style="background: #fff; height: 80vh">
                <div class="card-body p-md-5 mx-md-4">
                  <form action="{{ route('health') }}" method="get">
                    <div class="row">
                      <div class="col-xs-2 col-sm-2 col-lg-2">
                        <h4 class="text-left text-black">Trivia</h4>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-lg-12">
                        <h6 class="text-left text-black mt-2">8 Must-have Herbs at Home</h6>
                        <p class="text-left text-black mt-3" style="color: #121212">
                          Growing herbs at home is a great way to get your hands dirty, save some money and enjoy the delicious flavours. Their fragrance will also attract bees and butterflies into your garden. As you don’t need ample space, improved soil or plenty of time growing these herbs at home is ideal for a novice or young gardener.
                          These must-have herbs to grow at home only need sunlight, regular watering especially during the warm weather and good drainage. Continually harvesting the herbs will keep them shapely and encourage new growth. Some varieties will continue to grow throughout winter. With the annual herbs, you’ll be able to collect the seeds and replant them in spring.
                          Here are the 7 must-have herbs to grow at home.
                        </p>
                        <p class="text-left text-black mt-3" style="color: #121212">
                          PARSLEY - Italian parsley is one of the easiest herbs to grow as it’s fairly hardy. It also can be harvested any time and will just keep growing back.<br>
                          ROSEMARY - A tough herb that requires little attention, it’s rosemary. It will survive mostly on rainwater alone and can last for a number of years.<br>
                          MINT - Mint is a very easy to grow herb but will take over your garden if you’re not careful. Requiring just a little water and suitable for both sun or shade.<br>
                          BASIL - One of the more fragrant herbs to grow at home is basil. Basil grows well from seed when planted in full sun. It prefers moist.<br>
                          CHIVES - Chives are an excellent herb for pots or can be used to create garden borders. They’re very tough, however, perform better in cool weather.<br>
                          THYME - Another great edible plant for your garden is thyme. It will do well in a pot, but also as a ground cover forming large clumps in the garden.<br>
                          LAVENDER - Lavender isn’t technically a herb, but it is a beautiful edible plant that can be used to flavour baking and make bath product beautifully fragrant.<br>
                          OREGANO - A full sun to part shade lover, oregano is a tough plant that will do well planted in the garden, as a ground cover or in a pot.
                        </p>

                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- login end -->

  <!-- footer start -->
  @include('partial.footer')
  <!-- footer end -->

  <!-- JavaScript Bundle with Popper -->
  @include('partial.scripts')

</body>
</html>
