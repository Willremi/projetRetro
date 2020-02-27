<?php require ('header.php') ?>

  <style>

        @font-face {
          font-family: venus;
          src: url("fonts/venus_rising/venusrising.ttf");
        }

        td {
          font-family: venus;
          font-size: 16px;
        }
      
    </style>
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12">
            <h1 class="mt-2">Liste des séries des années 80</h1>
            <hr>
            <table class="table table-bordered rounded">
              <thead>
                <tr>
                  <th scope="col">Noms</th>
                  <th scope="col">Genres</th>
                  <th scope="col">Acteurs</th>
                  <th scope="col">Réalisateurs</th>
                  <th scope="col">Années de production</th>
                  <th scope="col">Lieux de diffusion</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Magnum</td>
                  <td>Drame, Action</td>
                  <td>Tom Selleck, John Hillerman</td>
                  <td>Glen A. Larson, Donald P. Bellisario</td>
                  <td>1980 - 1988</td>
                  <td>USA(1980), France(1981)</td>
                </tr>
                <tr>
                  <td>Supercopter</td>
                  <td>Action</td>
                  <td>Jan-Michael Vincent, Barry Van Dyke</td>
                  <td>Donald P.Bellisario</td>
                  <td>1984 - 1987</td>
                  <td>USA(1984), France(1985)</td>
                </tr>
                <tr>
                  <td>Arabesque</td>
                  <td>Policier</td>
                  <td>Angela Lansbury</td>
                  <td>Richard Levinson, William Link</td>
                  <td>1984 - 19996</td>
                  <td>USA(1984), France(1986)</td>
                </tr>
                
              </tbody>
            </table>
            
          </div>
            
        </div><!-- fin row -->
    </div><!-- fin container-fluid -->

<?php require ('footer.php'); ?>