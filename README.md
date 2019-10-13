## About
This class can solve equations in linear programming with Simplex algorithm.

It takes as parameters arrays of left data, right data and z data, as well the number of iterations.

The class can solve the equation and even display the results in a HTML table.

## Installation guide:

1. Go to https://www.phpclasses.org/package/10046-PHP-Solve-equations-in-linear-programming-with-Simplex.html#download
2. If you are not logged in, do it.
3 a. Download simplex-solver-2016-11-19.zip and unpack this in your project folder.
3 b. If you want to install it via Composer put following lines into your composer.json file:

{
  "require":
  {
    "phpclasses/simplex-solver": ">=1.0.0"
  },
  "repositories":
  [
    {
      "type": "composer",
      "url": "https:\/\/www.phpclasses.org\/"
    },
    {
      "packagist": false
    }
  ]
}

And get your password to install it from site pasted above.

4. In your *.php script add following includes:

include "setting.php";
include "data.php";
include "TSimplex.class.php";

5. And that's it.