<?PHP
//create file variable with hcard.json from /json folder
$file = 'json/hcard.json';



    // read read_hcard from functions.php
    $data =  read_hcard($file);

    // read_hcard($file);
    // $data = json_decode($json, true);
    // return $data;
//write array properties 
 
foreach ($data as $element) {
    //print_r($element);
    //br
    echo '<br>';
    //br
    echo '<br>';
    foreach ($data['h-card'] as $hcard) {

        print_r($hcard['name']['p-name']);
        //print p-honorific-prefix
        echo '<br>';
        print_r($hcard['name']['p-honorific-prefix']);
        //print p-given-name
        echo '<br>';
        print_r($hcard['name']['p-given-name']);
        
        //print p-family-name
        echo '<br>';
        print_r($hcard['name']['p-family-name']);
        //print p-honorific-suffix
        echo '<br>';
        print_r($hcard['name']['p-honorific-suffix']);
        //print p-nickname
        echo '<br>';
        print_r($hcard['name']['p-nickname']);
        //print p-email
        echo '<br>';
       
        //br
        echo '<br>';
    }

}

// write array [
//    'commons' => [
//      'lang' => 'en',
//      'timezone' => 'UTC',
 //   ],
//    'h-card' => [
//      0 => [
//        'lang' => 'en',
//        'name' => [
//          'p-name' => 'John Doe',
//          'p-honorific-prefix' => 'Mr.',
//          'p-given-name' => 'John',
//          'p-family-name' => 'Doe',
//         'p-honorific-suffix' => 'Ph.D.',
//          'p-nickname' => 'john.doe',
//        ],
//        'job' => [
//          'p-job-title' => 'Software Engineer',
//          'p-organization' => 'Acme Inc.',
//          'p-street-address' => '123 Main St.',
//          'p-extended-address' => 'Suite 100',
//          'p-locality' => 'Anytown',
//          'p-region' => 'CA',
//          'p-postal-code' => '12345',
//          'p-country-name' => 'United States',
//          'p-email' => 'sample@sample.com',
//        ],
//      ],
//    ],
//  ]
// into foreach loop


?>



<?php /*header>
    <h1>Profile</h1>
</header>
<main>
    <div class="profile">
        <div class="profile__name">
            <?php echo $data['name']; ?>
        </div>
        <div class="profile__org">
            <?php echo $data['org']; ?>
        </div>
        <div class="profile__email">
            <a href="mailto:
            <?php echo $data['email']; ?>">
            <?php echo $data['email']; ?>
            </a>
        </div>
        <div class="profile__tel">
            <a href="tel:
            <?php echo $data['tel']; ?>">
            <?php echo $data['tel']; ?>
            </a>
        </div>
        <div class="profile__adr">
            <?php echo $data['adr']; ?>
        </div>
        <div class="profile__url">
            <a href="<?php echo $data['url']; ?>">
            <?php echo $data['url']; ?>
            </a>
        </div>
        <div class="profile__photo">
            <img src="<?php echo $data['photo']; ?>" alt="<?php echo $data['name']; ?>">
        </div>
    </div>
</main */?>

