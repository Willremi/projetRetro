<?php require('header.php'); ?>

  <style>
      @font-face {
        font-family: Typewriter;
        src: url("fonts/jmh_typewriter_dry/Typewriter-Thin.otf");
      }
    
      td {
          font-family: Typewriter;
      }

      .jumbotron {
      filter: grayscale(100%);
      }
    </style>

  <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12">
            <h1 class="mt-2">Liste des séries des années 50</h1>
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
                  <td><a href="incorrup.php">Les Incorruptibles</a></td>
                  <td>Policier</td>
                  <td>Robert Stack, Abel Fernandez</td>
                  <td>Quinn Martin</td>
                  <td>	
                    1959 - 1963</td>
                  <td>USA(1959), France(1964)</td>
                </tr>
                <tr>
                  <td>La Quatrième Dimension</td>
                  <td>Drame, Epouvante-horreur</td>
                  <td>/</td>
                  <td>Rod Serling</td>
                  <td>	
                    1959 - 1964</td>
                  <td>USA(1959), France(un épisode en 1965, 1984)</td>
                </tr>
                <tr>
                  <td>Alfred Hitchcock Présente</td>
                  <td>Drame, Policier</td>
                  <td colspan="2">Alfred Hitchcock</td>
                  <!-- <td>Rod Serling</td> -->
                  <td>	
                    1955 - 1962</td>
                  <td>USA(1955), France(1959)</td>
                </tr>
                <tr>
                  <td>Perry Mason</td>
                  <td>Policier, Jucidiaire</td>
                  <td>Raymond Burr, Barbara Hale</td>
                  <td>/</td>
                  <td>	
                    1957 - 1966</td>
                  <td>USA(1957), France(années 1960)</td>
                </tr>
                <tr>
                  <td>Bonanza</td>
                  <td>Western</td>
                  <td>Lorne Greene, Michael Landon</td>
                  <td>David Dortort</td>
                  <td>	
                    1959 - 1973</td>
                  <td>USA(1959), France(1965)</td>
                </tr>
              </tbody>
            </table>
            
          </div>
            
        </div><!-- fin row -->
    </div><!-- fin container-fluid -->

<?php require ('footer.php'); ?>