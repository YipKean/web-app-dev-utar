<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        table {
            border-collapse: collapse;
            width: auto;
        }

        table th {
            background-color: pink;
        }

        table th,
        table td {
            padding: 1vh;
        }

        table tr:nth-child(odd) td {
            background-color: white;
        }

        table tr:nth-child(even) td {
            background-color: lightgray;
        }
    </style>
    <h2>Question 1</h2>
    <?php
    $members = [
        'Tham Mun Fatt',
        'Tan Chin Tiong',
        'Apple Tiong',
        'Tiong Na Na',
        'Sam Sung'
    ];

    echo '<ul>';
    foreach ($members as $member) {
        echo '<li>' . $member . '</li>';
    }

    echo '</ul>';

    ?>

    <br>
    <h2>Question 2</h2>
    <?php
    $properties = [
        [
            'unitNo' => 'C-8-1',
            'owner' => 'Foo Yoke Wai',
        ],
        [
            'unitNo' => 'C-3A-3A',
            'owner' => 'Chia Kim Hooi',
        ],
        [
            'unitNo' => 'B-18-8',
            'owner' => 'Heng Tee See',
        ],
        [
            'unitNo' => 'A-10-10',
            'owner' => 'Tang So Ny',
        ],
        [
            'unitNo' => 'B-19-10',
            'owner' => 'Tang Xiao Mi',
        ],
    ];

    echo "<ol>";
    foreach ($properties as $property) {
        echo "<li>" . $property['unitNo'] . ": " . $property['owner'] . "</li>";
    }

    echo "</ol>";
    ?>

    <br>
    <h2>Question 3</h2>

    <?php
    $parking = [
        [
            'vehicleNo' => 'WYR9941',
            'driver' => 'Tham Mun Fatt',
            'block' => 'E',
            'floor' => '2',
            'bay' => 11,
        ],
        [
            'vehicleNo' => 'PKC7453',
            'driver' => 'Chia Kim Hooi',
            'block' => 'C',
            'floor' => '3A',
            'bay' => 15,
        ],
        [
            'vehicleNo' => 'WC852E',
            'driver' => 'Ho Jo Ee',
            'block' => 'E',
            'floor' => 'G',
            'bay' => 34,
        ],
        [
            'vehicleNo' => 'AGP8681',
            'driver' => 'Foo Yoke Wai',
            'block' => 'C',
            'floor' => '3A',
            'bay' => 19,
        ],
        [
            'vehicleNo' => 'WA1368Y',
            'driver' => 'Wong Pei Lin',
            'block' => 'A',
            'floor' => '1',
            'bay' => 1,
        ],
    ];

    $titles = ['Vehicle No.', 'Driver', 'Block', 'Floor', 'Bay No.'];

    echo "<table>";
    echo "<thead>";
    echo "<tr>";

    foreach ($titles as $title) {
        echo '<th>' . $title . '</th>';
    }

    echo "</thead>";
    echo "<tbody>";
    foreach ($parking as $entry) {
        echo "<tr>";
        echo "<td>" . $entry['vehicleNo'] . "</td>";
        echo "<td>" . $entry['driver'] . "</td>";
        echo "<td>" . $entry['block'] . "</td>";
        echo "<td>" . $entry['floor'] . "</td>";
        echo "<td>" . $entry['bay'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "<table>";
    ?>

    <h2>Question 4</h2>

    <?php
    $contacts = [
        [
            'name' => 'Chia Kim Hooi',
            'phone' => '+60124044404',
            'email' => 'chiakh@duck.com',
            'facebook' => 'xyz.chiakh',
        ],
        [
            'name' => 'Chan Xiao Hui',
            'phone' => '+60125785678',
            'email' => 'chanxh@pingguo.com',
            'facebook' => 'pqr.chanxh',
        ],
        [
            'name' => 'Tan Chin Tiong',
            'phone' => '+60193163616',
            'email' => 'tanct@burungtiong.com',
            'facebook' => 'abc.tanct',
        ],
        [
            'name' => 'Foo Yoke Wai',
            'phone' => '+60125575552',
            'email' => 'fooyw@chicken.com',
            'facebook' => 'ijk.fooyw',
        ],
        [
            'name' => 'Ho Xin Yi',
            'phone' => '+60195889776',
            'email' => 'hoxy@myna.com',
            'facebook' => 'mno.hoxy',
        ]
    ];

    $titles = ['No.', 'Name', 'Phone', 'Email', 'Facebook'];

    echo "<table>";
    echo "<thead>";
    echo "<tr>";

    foreach ($titles as $title) {

        echo "<th>" . $title . "</th>";
    }

    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";

    for ($i = 0; $i < count($contacts); $i++) {
        echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";
        echo "<td>" . $contacts[$i]['name'] . "</td>";
        echo "<td>" . $contacts[$i]['phone'] . "</td>";
        echo '<td> <a href="mailto:' . $contacts[$i]['email'] . '">' . $contacts[$i]['email'] . " </a></td>";
        echo '<td> <a href="https://www.facebook.com/' . $contacts[$i]['facebook'] . '">' . $contacts[$i]['facebook'] . " </a> </td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table";
    ?>
</body>

</html>