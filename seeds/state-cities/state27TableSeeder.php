<?php

use Illuminate\Database\Seeder;

class state27TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Cities for the state of MT - Montana.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                ['name' => 'Dell', 'state_id' => 27],
                ['name' => 'Dillon', 'state_id' => 27],
                ['name' => 'Glen', 'state_id' => 27],
                ['name' => 'Jackson', 'state_id' => 27],
                ['name' => 'Lima', 'state_id' => 27],
                ['name' => 'Polaris', 'state_id' => 27],
                ['name' => 'Wisdom', 'state_id' => 27],
                ['name' => 'Wise River', 'state_id' => 27],
                ['name' => 'Busby', 'state_id' => 27],
                ['name' => 'Crow Agency', 'state_id' => 27],
                ['name' => 'Decker', 'state_id' => 27],
                ['name' => 'Garryowen', 'state_id' => 27],
                ['name' => 'Hardin', 'state_id' => 27],
                ['name' => 'Fort Smith', 'state_id' => 27],
                ['name' => 'Lodge Grass', 'state_id' => 27],
                ['name' => 'Pryor', 'state_id' => 27],
                ['name' => 'Saint Xavier', 'state_id' => 27],
                ['name' => 'Wyola', 'state_id' => 27],
                ['name' => 'Chinook', 'state_id' => 27],
                ['name' => 'Harlem', 'state_id' => 27],
                ['name' => 'Hays', 'state_id' => 27],
                ['name' => 'Hogeland', 'state_id' => 27],
                ['name' => 'Lloyd', 'state_id' => 27],
                ['name' => 'Turner', 'state_id' => 27],
                ['name' => 'Zurich', 'state_id' => 27],
                ['name' => 'Radersburg', 'state_id' => 27],
                ['name' => 'Toston', 'state_id' => 27],
                ['name' => 'Townsend', 'state_id' => 27],
                ['name' => 'Winston', 'state_id' => 27],
                ['name' => 'Bearcreek', 'state_id' => 27],
                ['name' => 'Belfry', 'state_id' => 27],
                ['name' => 'Boyd', 'state_id' => 27],
                ['name' => 'Bridger', 'state_id' => 27],
                ['name' => 'Edgar', 'state_id' => 27],
                ['name' => 'Fromberg', 'state_id' => 27],
                ['name' => 'Joliet', 'state_id' => 27],
                ['name' => 'Red Lodge', 'state_id' => 27],
                ['name' => 'Roberts', 'state_id' => 27],
                ['name' => 'Roscoe', 'state_id' => 27],
                ['name' => 'Alzada', 'state_id' => 27],
                ['name' => 'Boyes', 'state_id' => 27],
                ['name' => 'Capitol', 'state_id' => 27],
                ['name' => 'Ekalaka', 'state_id' => 27],
                ['name' => 'Hammond', 'state_id' => 27],
                ['name' => 'Great Falls', 'state_id' => 27],
                ['name' => 'Malmstrom Afb', 'state_id' => 27],
                ['name' => 'Belt', 'state_id' => 27],
                ['name' => 'Black Eagle', 'state_id' => 27],
                ['name' => 'Cascade', 'state_id' => 27],
                ['name' => 'Fort Shaw', 'state_id' => 27],
                ['name' => 'Monarch', 'state_id' => 27],
                ['name' => 'Neihart', 'state_id' => 27],
                ['name' => 'Sand Coulee', 'state_id' => 27],
                ['name' => 'Simms', 'state_id' => 27],
                ['name' => 'Stockett', 'state_id' => 27],
                ['name' => 'Sun River', 'state_id' => 27],
                ['name' => 'Ulm', 'state_id' => 27],
                ['name' => 'Vaughn', 'state_id' => 27],
                ['name' => 'Carter', 'state_id' => 27],
                ['name' => 'Floweree', 'state_id' => 27],
                ['name' => 'Fort Benton', 'state_id' => 27],
                ['name' => 'Geraldine', 'state_id' => 27],
                ['name' => 'Highwood', 'state_id' => 27],
                ['name' => 'Loma', 'state_id' => 27],
                ['name' => 'Big Sandy', 'state_id' => 27],
                ['name' => 'Miles City', 'state_id' => 27],
                ['name' => 'Ismay', 'state_id' => 27],
                ['name' => 'Kinsey', 'state_id' => 27],
                ['name' => 'Volborg', 'state_id' => 27],
                ['name' => 'Flaxville', 'state_id' => 27],
                ['name' => 'Peerless', 'state_id' => 27],
                ['name' => 'Scobey', 'state_id' => 27],
                ['name' => 'Whitetail', 'state_id' => 27],
                ['name' => 'Richey', 'state_id' => 27],
                ['name' => 'Bloomfield', 'state_id' => 27],
                ['name' => 'Glendive', 'state_id' => 27],
                ['name' => 'Lindsay', 'state_id' => 27],
                ['name' => 'Anaconda', 'state_id' => 27],
                ['name' => 'Warm Springs', 'state_id' => 27],
                ['name' => 'Baker', 'state_id' => 27],
                ['name' => 'Plevna', 'state_id' => 27],
                ['name' => 'Willard', 'state_id' => 27],
                ['name' => 'Grass Range', 'state_id' => 27],
                ['name' => 'Buffalo', 'state_id' => 27],
                ['name' => 'Coffee Creek', 'state_id' => 27],
                ['name' => 'Denton', 'state_id' => 27],
                ['name' => 'Forest Grove', 'state_id' => 27],
                ['name' => 'Hilger', 'state_id' => 27],
                ['name' => 'Lewistown', 'state_id' => 27],
                ['name' => 'Moore', 'state_id' => 27],
                ['name' => 'Roy', 'state_id' => 27],
                ['name' => 'Winifred', 'state_id' => 27],
                ['name' => 'Kalispell', 'state_id' => 27],
                ['name' => 'Bigfork', 'state_id' => 27],
                ['name' => 'Columbia Falls', 'state_id' => 27],
                ['name' => 'Coram', 'state_id' => 27],
                ['name' => 'Essex', 'state_id' => 27],
                ['name' => 'Hungry Horse', 'state_id' => 27],
                ['name' => 'Kila', 'state_id' => 27],
                ['name' => 'Lake Mc Donald', 'state_id' => 27],
                ['name' => 'Lakeside', 'state_id' => 27],
                ['name' => 'Marion', 'state_id' => 27],
                ['name' => 'Martin City', 'state_id' => 27],
                ['name' => 'Olney', 'state_id' => 27],
                ['name' => 'Polebridge', 'state_id' => 27],
                ['name' => 'Somers', 'state_id' => 27],
                ['name' => 'West Glacier', 'state_id' => 27],
                ['name' => 'Whitefish', 'state_id' => 27],
                ['name' => 'Belgrade', 'state_id' => 27],
                ['name' => 'Bozeman', 'state_id' => 27],
                ['name' => 'Big Sky', 'state_id' => 27],
                ['name' => 'Gallatin Gateway', 'state_id' => 27],
                ['name' => 'Manhattan', 'state_id' => 27],
                ['name' => 'Three Forks', 'state_id' => 27],
                ['name' => 'West Yellowstone', 'state_id' => 27],
                ['name' => 'Willow Creek', 'state_id' => 27],
                ['name' => 'Mosby', 'state_id' => 27],
                ['name' => 'Sand Springs', 'state_id' => 27],
                ['name' => 'Brusett', 'state_id' => 27],
                ['name' => 'Cohagen', 'state_id' => 27],
                ['name' => 'Jordan', 'state_id' => 27],
                ['name' => 'Babb', 'state_id' => 27],
                ['name' => 'Browning', 'state_id' => 27],
                ['name' => 'Cut Bank', 'state_id' => 27],
                ['name' => 'East Glacier Park', 'state_id' => 27],
                ['name' => 'Lavina', 'state_id' => 27],
                ['name' => 'Ryegate', 'state_id' => 27],
                ['name' => 'Drummond', 'state_id' => 27],
                ['name' => 'Hall', 'state_id' => 27],
                ['name' => 'Philipsburg', 'state_id' => 27],
                ['name' => 'Havre', 'state_id' => 27],
                ['name' => 'Box Elder', 'state_id' => 27],
                ['name' => 'Gildford', 'state_id' => 27],
                ['name' => 'Hingham', 'state_id' => 27],
                ['name' => 'Inverness', 'state_id' => 27],
                ['name' => 'Kremlin', 'state_id' => 27],
                ['name' => 'Rudyard', 'state_id' => 27],
                ['name' => 'Basin', 'state_id' => 27],
                ['name' => 'Boulder', 'state_id' => 27],
                ['name' => 'Clancy', 'state_id' => 27],
                ['name' => 'Jefferson City', 'state_id' => 27],
                ['name' => 'Cardwell', 'state_id' => 27],
                ['name' => 'Whitehall', 'state_id' => 27],
                ['name' => 'Geyser', 'state_id' => 27],
                ['name' => 'Hobson', 'state_id' => 27],
                ['name' => 'Moccasin', 'state_id' => 27],
                ['name' => 'Raynesford', 'state_id' => 27],
                ['name' => 'Stanford', 'state_id' => 27],
                ['name' => 'Arlee', 'state_id' => 27],
                ['name' => 'Charlo', 'state_id' => 27],
                ['name' => 'Pablo', 'state_id' => 27],
                ['name' => 'Polson', 'state_id' => 27],
                ['name' => 'Ravalli', 'state_id' => 27],
                ['name' => 'Ronan', 'state_id' => 27],
                ['name' => 'Saint Ignatius', 'state_id' => 27],
                ['name' => 'Big Arm', 'state_id' => 27],
                ['name' => 'Dayton', 'state_id' => 27],
                ['name' => 'Elmo', 'state_id' => 27],
                ['name' => 'Proctor', 'state_id' => 27],
                ['name' => 'Rollins', 'state_id' => 27],
                ['name' => 'Augusta', 'state_id' => 27],
                ['name' => 'Helena', 'state_id' => 27],
                ['name' => 'Canyon Creek', 'state_id' => 27],
                ['name' => 'East Helena', 'state_id' => 27],
                ['name' => 'Fort Harrison', 'state_id' => 27],
                ['name' => 'Lincoln', 'state_id' => 27],
                ['name' => 'Marysville', 'state_id' => 27],
                ['name' => 'Wolf Creek', 'state_id' => 27],
                ['name' => 'Chester', 'state_id' => 27],
                ['name' => 'Joplin', 'state_id' => 27],
                ['name' => 'Whitlash', 'state_id' => 27],
                ['name' => 'Eureka', 'state_id' => 27],
                ['name' => 'Fortine', 'state_id' => 27],
                ['name' => 'Libby', 'state_id' => 27],
                ['name' => 'Rexford', 'state_id' => 27],
                ['name' => 'Stryker', 'state_id' => 27],
                ['name' => 'Trego', 'state_id' => 27],
                ['name' => 'Troy', 'state_id' => 27],
                ['name' => 'Brockway', 'state_id' => 27],
                ['name' => 'Circle', 'state_id' => 27],
                ['name' => 'Vida', 'state_id' => 27],
                ['name' => 'Alder', 'state_id' => 27],
                ['name' => 'Cameron', 'state_id' => 27],
                ['name' => 'Ennis', 'state_id' => 27],
                ['name' => 'Harrison', 'state_id' => 27],
                ['name' => 'Mc Allister', 'state_id' => 27],
                ['name' => 'Norris', 'state_id' => 27],
                ['name' => 'Pony', 'state_id' => 27],
                ['name' => 'Sheridan', 'state_id' => 27],
                ['name' => 'Silver Star', 'state_id' => 27],
                ['name' => 'Twin Bridges', 'state_id' => 27],
                ['name' => 'Virginia City', 'state_id' => 27],
                ['name' => 'Martinsdale', 'state_id' => 27],
                ['name' => 'Ringling', 'state_id' => 27],
                ['name' => 'White Sulphur Springs', 'state_id' => 27],
                ['name' => 'Alberton', 'state_id' => 27],
                ['name' => 'De Borgia', 'state_id' => 27],
                ['name' => 'Haugan', 'state_id' => 27],
                ['name' => 'Saint Regis', 'state_id' => 27],
                ['name' => 'Saltese', 'state_id' => 27],
                ['name' => 'Superior', 'state_id' => 27],
                ['name' => 'Missoula', 'state_id' => 27],
                ['name' => 'Bonner', 'state_id' => 27],
                ['name' => 'Clinton', 'state_id' => 27],
                ['name' => 'Condon', 'state_id' => 27],
                ['name' => 'Frenchtown', 'state_id' => 27],
                ['name' => 'Huson', 'state_id' => 27],
                ['name' => 'Lolo', 'state_id' => 27],
                ['name' => 'Milltown', 'state_id' => 27],
                ['name' => 'Seeley Lake', 'state_id' => 27],
                ['name' => 'Melstone', 'state_id' => 27],
                ['name' => 'Musselshell', 'state_id' => 27],
                ['name' => 'Roundup', 'state_id' => 27],
                ['name' => 'Clyde Park', 'state_id' => 27],
                ['name' => 'Cooke City', 'state_id' => 27],
                ['name' => 'Emigrant', 'state_id' => 27],
                ['name' => 'Gardiner', 'state_id' => 27],
                ['name' => 'Livingston', 'state_id' => 27],
                ['name' => 'Pray', 'state_id' => 27],
                ['name' => 'Silver Gate', 'state_id' => 27],
                ['name' => 'Springdale', 'state_id' => 27],
                ['name' => 'Wilsall', 'state_id' => 27],
                ['name' => 'Teigen', 'state_id' => 27],
                ['name' => 'Winnett', 'state_id' => 27],
                ['name' => 'Saco', 'state_id' => 27],
                ['name' => 'Dodson', 'state_id' => 27],
                ['name' => 'Loring', 'state_id' => 27],
                ['name' => 'Malta', 'state_id' => 27],
                ['name' => 'Whitewater', 'state_id' => 27],
                ['name' => 'Zortman', 'state_id' => 27],
                ['name' => 'Brady', 'state_id' => 27],
                ['name' => 'Conrad', 'state_id' => 27],
                ['name' => 'Dupuyer', 'state_id' => 27],
                ['name' => 'Heart Butte', 'state_id' => 27],
                ['name' => 'Ledger', 'state_id' => 27],
                ['name' => 'Valier', 'state_id' => 27],
                ['name' => 'Otter', 'state_id' => 27],
                ['name' => 'Biddle', 'state_id' => 27],
                ['name' => 'Broadus', 'state_id' => 27],
                ['name' => 'Olive', 'state_id' => 27],
                ['name' => 'Powderville', 'state_id' => 27],
                ['name' => 'Avon', 'state_id' => 27],
                ['name' => 'Deer Lodge', 'state_id' => 27],
                ['name' => 'Elliston', 'state_id' => 27],
                ['name' => 'Garrison', 'state_id' => 27],
                ['name' => 'Gold Creek', 'state_id' => 27],
                ['name' => 'Helmville', 'state_id' => 27],
                ['name' => 'Ovando', 'state_id' => 27],
                ['name' => 'Fallon', 'state_id' => 27],
                ['name' => 'Mildred', 'state_id' => 27],
                ['name' => 'Terry', 'state_id' => 27],
                ['name' => 'Conner', 'state_id' => 27],
                ['name' => 'Corvallis', 'state_id' => 27],
                ['name' => 'Darby', 'state_id' => 27],
                ['name' => 'Florence', 'state_id' => 27],
                ['name' => 'Grantsdale', 'state_id' => 27],
                ['name' => 'Hamilton', 'state_id' => 27],
                ['name' => 'Pinesdale', 'state_id' => 27],
                ['name' => 'Stevensville', 'state_id' => 27],
                ['name' => 'Sula', 'state_id' => 27],
                ['name' => 'Victor', 'state_id' => 27],
                ['name' => 'Crane', 'state_id' => 27],
                ['name' => 'Fairview', 'state_id' => 27],
                ['name' => 'Lambert', 'state_id' => 27],
                ['name' => 'Savage', 'state_id' => 27],
                ['name' => 'Sidney', 'state_id' => 27],
                ['name' => 'Wolf Point', 'state_id' => 27],
                ['name' => 'Bainville', 'state_id' => 27],
                ['name' => 'Brockton', 'state_id' => 27],
                ['name' => 'Culbertson', 'state_id' => 27],
                ['name' => 'Froid', 'state_id' => 27],
                ['name' => 'Homestead', 'state_id' => 27],
                ['name' => 'Poplar', 'state_id' => 27],
                ['name' => 'Ashland', 'state_id' => 27],
                ['name' => 'Birney', 'state_id' => 27],
                ['name' => 'Ingomar', 'state_id' => 27],
                ['name' => 'Lame Deer', 'state_id' => 27],
                ['name' => 'Sumatra', 'state_id' => 27],
                ['name' => 'Angela', 'state_id' => 27],
                ['name' => 'Colstrip', 'state_id' => 27],
                ['name' => 'Forsyth', 'state_id' => 27],
                ['name' => 'Hathaway', 'state_id' => 27],
                ['name' => 'Rosebud', 'state_id' => 27],
                ['name' => 'Dixon', 'state_id' => 27],
                ['name' => 'Heron', 'state_id' => 27],
                ['name' => 'Hot Springs', 'state_id' => 27],
                ['name' => 'Lonepine', 'state_id' => 27],
                ['name' => 'Noxon', 'state_id' => 27],
                ['name' => 'Paradise', 'state_id' => 27],
                ['name' => 'Plains', 'state_id' => 27],
                ['name' => 'Thompson Falls', 'state_id' => 27],
                ['name' => 'Trout Creek', 'state_id' => 27],
                ['name' => 'Antelope', 'state_id' => 27],
                ['name' => 'Dagmar', 'state_id' => 27],
                ['name' => 'Medicine Lake', 'state_id' => 27],
                ['name' => 'Outlook', 'state_id' => 27],
                ['name' => 'Plentywood', 'state_id' => 27],
                ['name' => 'Raymond', 'state_id' => 27],
                ['name' => 'Redstone', 'state_id' => 27],
                ['name' => 'Reserve', 'state_id' => 27],
                ['name' => 'Westby', 'state_id' => 27],
                ['name' => 'Butte', 'state_id' => 27],
                ['name' => 'Divide', 'state_id' => 27],
                ['name' => 'Melrose', 'state_id' => 27],
                ['name' => 'Ramsay', 'state_id' => 27],
                ['name' => 'Absarokee', 'state_id' => 27],
                ['name' => 'Columbus', 'state_id' => 27],
                ['name' => 'Fishtail', 'state_id' => 27],
                ['name' => 'Molt', 'state_id' => 27],
                ['name' => 'Nye', 'state_id' => 27],
                ['name' => 'Park City', 'state_id' => 27],
                ['name' => 'Rapelje', 'state_id' => 27],
                ['name' => 'Reed Point', 'state_id' => 27],
                ['name' => 'Big Timber', 'state_id' => 27],
                ['name' => 'Greycliff', 'state_id' => 27],
                ['name' => 'Mc Leod', 'state_id' => 27],
                ['name' => 'Melville', 'state_id' => 27],
                ['name' => 'Bynum', 'state_id' => 27],
                ['name' => 'Choteau', 'state_id' => 27],
                ['name' => 'Dutton', 'state_id' => 27],
                ['name' => 'Fairfield', 'state_id' => 27],
                ['name' => 'Pendroy', 'state_id' => 27],
                ['name' => 'Power', 'state_id' => 27],
                ['name' => 'Ethridge', 'state_id' => 27],
                ['name' => 'Galata', 'state_id' => 27],
                ['name' => 'Kevin', 'state_id' => 27],
                ['name' => 'Lothair', 'state_id' => 27],
                ['name' => 'Oilmont', 'state_id' => 27],
                ['name' => 'Shelby', 'state_id' => 27],
                ['name' => 'Sunburst', 'state_id' => 27],
                ['name' => 'Sweet Grass', 'state_id' => 27],
                ['name' => 'Bighorn', 'state_id' => 27],
                ['name' => 'Hysham', 'state_id' => 27],
                ['name' => 'Sanders', 'state_id' => 27],
                ['name' => 'Fort Peck', 'state_id' => 27],
                ['name' => 'Frazer', 'state_id' => 27],
                ['name' => 'Glasgow', 'state_id' => 27],
                ['name' => 'Saint Marie', 'state_id' => 27],
                ['name' => 'Glentana', 'state_id' => 27],
                ['name' => 'Hinsdale', 'state_id' => 27],
                ['name' => 'Larslan', 'state_id' => 27],
                ['name' => 'Nashua', 'state_id' => 27],
                ['name' => 'Opheim', 'state_id' => 27],
                ['name' => 'Richland', 'state_id' => 27],
                ['name' => 'Vandalia', 'state_id' => 27],
                ['name' => 'Harlowton', 'state_id' => 27],
                ['name' => 'Shawmut', 'state_id' => 27],
                ['name' => 'Two Dot', 'state_id' => 27],
                ['name' => 'Judith Gap', 'state_id' => 27],
                ['name' => 'Wibaux', 'state_id' => 27],
                ['name' => 'Acton', 'state_id' => 27],
                ['name' => 'Ballantine', 'state_id' => 27],
                ['name' => 'Broadview', 'state_id' => 27],
                ['name' => 'Custer', 'state_id' => 27],
                ['name' => 'Huntley', 'state_id' => 27],
                ['name' => 'Laurel', 'state_id' => 27],
                ['name' => 'Pompeys Pillar', 'state_id' => 27],
                ['name' => 'Shepherd', 'state_id' => 27],
                ['name' => 'Worden', 'state_id' => 27],
                ['name' => 'Billings', 'state_id' => 27]
            ]);
        }
    }
}
