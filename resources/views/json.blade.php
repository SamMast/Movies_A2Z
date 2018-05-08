<?PHP

	//I want to pull this movie information straight from the database, but I am having trouble
	//If I can pull the info here, I would make sure it is in object format, and display it on the page.

   $movies = [
     'Step Brothers'            => '2008',
     'Black Hawk Down'          => '2002',
     'Dumb and Dumber'          => '1994',
     'The Last of The Mohicans' => '1992',
     'The Godfather'            => '1972'
   ];
	
	header('Content-Type: application/json');
	echo json_encode($movies);