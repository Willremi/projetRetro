<?php require ('header.php') ?>

  <style>
      .jumbotron {
        filter: sepia(0.35);
      }
        @font-face {
          font-family: alba;
          src: url("fonts/alba/alba.ttf");
        }

        td {
          font-family: alba;
          font-size: 20px;
        }
      
    </style>
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12">
            <h1 class="mt-2">Liste des séries des années 70</h1>
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
                  <td><a href="ileperdue.php">L'Île perdue</a></td>
                  <td>Aventure, Famille</td>
                  <td>Tony Hughes, Jane Vallis</td>
                  <td>Michael Lawrence, Roger Mirams</td>
                  <td>1976</td>
                  <td>Australie(1976), France(1978)</td>
                </tr>
                <tr>
                  <td>Columbo</td>
                  <td>Drame, Policier</td>
                  <td>Peter Falk</td>
                  <td>William Link, Richard Levinson</td>
                  <td>1971 - 2003</td>
                  <td>USA(1971), France(1972)</td>
                </tr>
                <tr>
                  <td>La petite maison dans la prairie</td>
                  <td>Drame, Famille</td>
                  <td colspan="2">Michael Landon</td>
                  
                  <td>1974 - 1983</td>
                  <td>USA(1974), France(1976)</td>
                </tr>
                <tr>
                  <td>Les têtes brûlées</td>
                  <td>Aventure, Drame, Guerre</td>
                  <td>Robert Conrad</td>
                  <td>Stephen J. Cannell</td>
                  <td>1976 - 1978</td>
                  <td>USA(1976), France(1977)</td>
                </tr>
                <tr>
                  <td>San Ku Kai</td>
                  <td>Science fiction</td>
                  <td>Hiroyuki Sanada, Akira Oda, Rio Nishida</td>
                  <td>Minoru Yamada, Tôru Hirayama</td>
                  <td>1978 - 1979</td>
                  <td>Japon(1978), France(1979)</td>
                </tr>
                <tr>
                  <td>Kamen Rider</td>
                  <td>Science fiction, Action</td>
                  <td>Hiroshi Fujioka, Takeshi Sasaki, Akiji Kobayashi</td>
                  <td>Shotaro Ishinomori</td>
                  <td>1971 - 1973</td>
                  <td>Japon(1971)</td>
                </tr>
                
              </tbody>
            </table>
            
          </div>
            
        </div><!-- fin row -->
    </div><!-- fin container-fluid -->

<?php require ('footer.php'); ?>