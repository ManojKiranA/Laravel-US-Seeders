<?php

use Illuminate\Database\Seeder;

class state29TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Cities for the state of ND - North Dakota.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                ['name' => 'Hettinger', 'state_id' => 29],
                ['name' => 'Reeder', 'state_id' => 29],
                ['name' => 'Fingal', 'state_id' => 29],
                ['name' => 'Kathryn', 'state_id' => 29],
                ['name' => 'Nome', 'state_id' => 29],
                ['name' => 'Oriska', 'state_id' => 29],
                ['name' => 'Pillsbury', 'state_id' => 29],
                ['name' => 'Valley City', 'state_id' => 29],
                ['name' => 'Dazey', 'state_id' => 29],
                ['name' => 'Litchville', 'state_id' => 29],
                ['name' => 'Rogers', 'state_id' => 29],
                ['name' => 'Sanborn', 'state_id' => 29],
                ['name' => 'Wimbledon', 'state_id' => 29],
                ['name' => 'Esmond', 'state_id' => 29],
                ['name' => 'Fort Totten', 'state_id' => 29],
                ['name' => 'Knox', 'state_id' => 29],
                ['name' => 'Leeds', 'state_id' => 29],
                ['name' => 'Maddock', 'state_id' => 29],
                ['name' => 'Minnewaukan', 'state_id' => 29],
                ['name' => 'Oberon', 'state_id' => 29],
                ['name' => 'Saint Michael', 'state_id' => 29],
                ['name' => 'Tokio', 'state_id' => 29],
                ['name' => 'Warwick', 'state_id' => 29],
                ['name' => 'York', 'state_id' => 29],
                ['name' => 'Fairfield', 'state_id' => 29],
                ['name' => 'Medora', 'state_id' => 29],
                ['name' => 'Bottineau', 'state_id' => 29],
                ['name' => 'Willow City', 'state_id' => 29],
                ['name' => 'Antler', 'state_id' => 29],
                ['name' => 'Kramer', 'state_id' => 29],
                ['name' => 'Lansford', 'state_id' => 29],
                ['name' => 'Maxbass', 'state_id' => 29],
                ['name' => 'Newburg', 'state_id' => 29],
                ['name' => 'Souris', 'state_id' => 29],
                ['name' => 'Westhope', 'state_id' => 29],
                ['name' => 'Bowman', 'state_id' => 29],
                ['name' => 'Rhame', 'state_id' => 29],
                ['name' => 'Scranton', 'state_id' => 29],
                ['name' => 'Bowbells', 'state_id' => 29],
                ['name' => 'Columbus', 'state_id' => 29],
                ['name' => 'Flaxton', 'state_id' => 29],
                ['name' => 'Lignite', 'state_id' => 29],
                ['name' => 'Portal', 'state_id' => 29],
                ['name' => 'Powers Lake', 'state_id' => 29],
                ['name' => 'Regan', 'state_id' => 29],
                ['name' => 'Wing', 'state_id' => 29],
                ['name' => 'Bismarck', 'state_id' => 29],
                ['name' => 'Baldwin', 'state_id' => 29],
                ['name' => 'Driscoll', 'state_id' => 29],
                ['name' => 'Menoken', 'state_id' => 29],
                ['name' => 'Moffit', 'state_id' => 29],
                ['name' => 'Sterling', 'state_id' => 29],
                ['name' => 'Absaraka', 'state_id' => 29],
                ['name' => 'Amenia', 'state_id' => 29],
                ['name' => 'Argusville', 'state_id' => 29],
                ['name' => 'Arthur', 'state_id' => 29],
                ['name' => 'Ayr', 'state_id' => 29],
                ['name' => 'Buffalo', 'state_id' => 29],
                ['name' => 'Casselton', 'state_id' => 29],
                ['name' => 'Davenport', 'state_id' => 29],
                ['name' => 'Erie', 'state_id' => 29],
                ['name' => 'Gardner', 'state_id' => 29],
                ['name' => 'Grandin', 'state_id' => 29],
                ['name' => 'Harwood', 'state_id' => 29],
                ['name' => 'Horace', 'state_id' => 29],
                ['name' => 'Hunter', 'state_id' => 29],
                ['name' => 'Kindred', 'state_id' => 29],
                ['name' => 'Leonard', 'state_id' => 29],
                ['name' => 'Mapleton', 'state_id' => 29],
                ['name' => 'Page', 'state_id' => 29],
                ['name' => 'Tower City', 'state_id' => 29],
                ['name' => 'West Fargo', 'state_id' => 29],
                ['name' => 'Wheatland', 'state_id' => 29],
                ['name' => 'Fargo', 'state_id' => 29],
                ['name' => 'Hannah', 'state_id' => 29],
                ['name' => 'Langdon', 'state_id' => 29],
                ['name' => 'Maida', 'state_id' => 29],
                ['name' => 'Milton', 'state_id' => 29],
                ['name' => 'Osnabrock', 'state_id' => 29],
                ['name' => 'Wales', 'state_id' => 29],
                ['name' => 'Alsen', 'state_id' => 29],
                ['name' => 'Calvin', 'state_id' => 29],
                ['name' => 'Munich', 'state_id' => 29],
                ['name' => 'Nekoma', 'state_id' => 29],
                ['name' => 'Sarles', 'state_id' => 29],
                ['name' => 'Ellendale', 'state_id' => 29],
                ['name' => 'Forbes', 'state_id' => 29],
                ['name' => 'Fullerton', 'state_id' => 29],
                ['name' => 'Oakes', 'state_id' => 29],
                ['name' => 'Crosby', 'state_id' => 29],
                ['name' => 'Noonan', 'state_id' => 29],
                ['name' => 'Ambrose', 'state_id' => 29],
                ['name' => 'Fortuna', 'state_id' => 29],
                ['name' => 'Dodge', 'state_id' => 29],
                ['name' => 'Dunn Center', 'state_id' => 29],
                ['name' => 'Halliday', 'state_id' => 29],
                ['name' => 'Killdeer', 'state_id' => 29],
                ['name' => 'Manning', 'state_id' => 29],
                ['name' => 'Marshall', 'state_id' => 29],
                ['name' => 'New Rockford', 'state_id' => 29],
                ['name' => 'Sheyenne', 'state_id' => 29],
                ['name' => 'Braddock', 'state_id' => 29],
                ['name' => 'Hague', 'state_id' => 29],
                ['name' => 'Hazelton', 'state_id' => 29],
                ['name' => 'Kintyre', 'state_id' => 29],
                ['name' => 'Linton', 'state_id' => 29],
                ['name' => 'Strasburg', 'state_id' => 29],
                ['name' => 'Carrington', 'state_id' => 29],
                ['name' => 'Glenfield', 'state_id' => 29],
                ['name' => 'Grace City', 'state_id' => 29],
                ['name' => 'Mchenry', 'state_id' => 29],
                ['name' => 'Beach', 'state_id' => 29],
                ['name' => 'Golva', 'state_id' => 29],
                ['name' => 'Sentinel Butte', 'state_id' => 29],
                ['name' => 'Grand Forks', 'state_id' => 29],
                ['name' => 'Grand Forks Afb', 'state_id' => 29],
                ['name' => 'Arvilla', 'state_id' => 29],
                ['name' => 'Emerado', 'state_id' => 29],
                ['name' => 'Gilby', 'state_id' => 29],
                ['name' => 'Inkster', 'state_id' => 29],
                ['name' => 'Larimore', 'state_id' => 29],
                ['name' => 'Manvel', 'state_id' => 29],
                ['name' => 'Mekinock', 'state_id' => 29],
                ['name' => 'Niagara', 'state_id' => 29],
                ['name' => 'Northwood', 'state_id' => 29],
                ['name' => 'Reynolds', 'state_id' => 29],
                ['name' => 'Thompson', 'state_id' => 29],
                ['name' => 'Carson', 'state_id' => 29],
                ['name' => 'Elgin', 'state_id' => 29],
                ['name' => 'New Leipzig', 'state_id' => 29],
                ['name' => 'Raleigh', 'state_id' => 29],
                ['name' => 'Shields', 'state_id' => 29],
                ['name' => 'Binford', 'state_id' => 29],
                ['name' => 'Cooperstown', 'state_id' => 29],
                ['name' => 'Hannaford', 'state_id' => 29],
                ['name' => 'Jessie', 'state_id' => 29],
                ['name' => 'Sutton', 'state_id' => 29],
                ['name' => 'Mott', 'state_id' => 29],
                ['name' => 'New England', 'state_id' => 29],
                ['name' => 'Regent', 'state_id' => 29],
                ['name' => 'Dawson', 'state_id' => 29],
                ['name' => 'Pettibone', 'state_id' => 29],
                ['name' => 'Robinson', 'state_id' => 29],
                ['name' => 'Steele', 'state_id' => 29],
                ['name' => 'Tappen', 'state_id' => 29],
                ['name' => 'Tuttle', 'state_id' => 29],
                ['name' => 'Berlin', 'state_id' => 29],
                ['name' => 'Dickey', 'state_id' => 29],
                ['name' => 'Edgeley', 'state_id' => 29],
                ['name' => 'Jud', 'state_id' => 29],
                ['name' => 'Kulm', 'state_id' => 29],
                ['name' => 'Lamoure', 'state_id' => 29],
                ['name' => 'Marion', 'state_id' => 29],
                ['name' => 'Verona', 'state_id' => 29],
                ['name' => 'Fredonia', 'state_id' => 29],
                ['name' => 'Gackle', 'state_id' => 29],
                ['name' => 'Napoleon', 'state_id' => 29],
                ['name' => 'Anamoose', 'state_id' => 29],
                ['name' => 'Balfour', 'state_id' => 29],
                ['name' => 'Bantry', 'state_id' => 29],
                ['name' => 'Deering', 'state_id' => 29],
                ['name' => 'Drake', 'state_id' => 29],
                ['name' => 'Granville', 'state_id' => 29],
                ['name' => 'Karlsruhe', 'state_id' => 29],
                ['name' => 'Norwich', 'state_id' => 29],
                ['name' => 'Towner', 'state_id' => 29],
                ['name' => 'Upham', 'state_id' => 29],
                ['name' => 'Velva', 'state_id' => 29],
                ['name' => 'Voltaire', 'state_id' => 29],
                ['name' => 'Ashley', 'state_id' => 29],
                ['name' => 'Lehr', 'state_id' => 29],
                ['name' => 'Wishek', 'state_id' => 29],
                ['name' => 'Zeeland', 'state_id' => 29],
                ['name' => 'Grassy Butte', 'state_id' => 29],
                ['name' => 'Mandaree', 'state_id' => 29],
                ['name' => 'Alexander', 'state_id' => 29],
                ['name' => 'Arnegard', 'state_id' => 29],
                ['name' => 'Cartwright', 'state_id' => 29],
                ['name' => 'Keene', 'state_id' => 29],
                ['name' => 'Watford City', 'state_id' => 29],
                ['name' => 'Coleharbor', 'state_id' => 29],
                ['name' => 'Garrison', 'state_id' => 29],
                ['name' => 'Mercer', 'state_id' => 29],
                ['name' => 'Riverdale', 'state_id' => 29],
                ['name' => 'Turtle Lake', 'state_id' => 29],
                ['name' => 'Underwood', 'state_id' => 29],
                ['name' => 'Washburn', 'state_id' => 29],
                ['name' => 'Wilton', 'state_id' => 29],
                ['name' => 'Benedict', 'state_id' => 29],
                ['name' => 'Butte', 'state_id' => 29],
                ['name' => 'Max', 'state_id' => 29],
                ['name' => 'Roseglen', 'state_id' => 29],
                ['name' => 'Ruso', 'state_id' => 29],
                ['name' => 'Beulah', 'state_id' => 29],
                ['name' => 'Golden Valley', 'state_id' => 29],
                ['name' => 'Hazen', 'state_id' => 29],
                ['name' => 'Stanton', 'state_id' => 29],
                ['name' => 'Zap', 'state_id' => 29],
                ['name' => 'Almont', 'state_id' => 29],
                ['name' => 'Flasher', 'state_id' => 29],
                ['name' => 'Mandan', 'state_id' => 29],
                ['name' => 'New Salem', 'state_id' => 29],
                ['name' => 'Saint Anthony', 'state_id' => 29],
                ['name' => 'Glen Ullin', 'state_id' => 29],
                ['name' => 'Hebron', 'state_id' => 29],
                ['name' => 'New Town', 'state_id' => 29],
                ['name' => 'Palermo', 'state_id' => 29],
                ['name' => 'Parshall', 'state_id' => 29],
                ['name' => 'Plaza', 'state_id' => 29],
                ['name' => 'Ross', 'state_id' => 29],
                ['name' => 'Stanley', 'state_id' => 29],
                ['name' => 'White Earth', 'state_id' => 29],
                ['name' => 'Aneta', 'state_id' => 29],
                ['name' => 'Dahlen', 'state_id' => 29],
                ['name' => 'Mcville', 'state_id' => 29],
                ['name' => 'Michigan', 'state_id' => 29],
                ['name' => 'Petersburg', 'state_id' => 29],
                ['name' => 'Lakota', 'state_id' => 29],
                ['name' => 'Pekin', 'state_id' => 29],
                ['name' => 'Tolna', 'state_id' => 29],
                ['name' => 'Center', 'state_id' => 29],
                ['name' => 'Bathgate', 'state_id' => 29],
                ['name' => 'Cavalier', 'state_id' => 29],
                ['name' => 'Crystal', 'state_id' => 29],
                ['name' => 'Drayton', 'state_id' => 29],
                ['name' => 'Glasston', 'state_id' => 29],
                ['name' => 'Hamilton', 'state_id' => 29],
                ['name' => 'Hensel', 'state_id' => 29],
                ['name' => 'Mountain', 'state_id' => 29],
                ['name' => 'Neche', 'state_id' => 29],
                ['name' => 'Pembina', 'state_id' => 29],
                ['name' => 'Saint Thomas', 'state_id' => 29],
                ['name' => 'Walhalla', 'state_id' => 29],
                ['name' => 'Balta', 'state_id' => 29],
                ['name' => 'Rugby', 'state_id' => 29],
                ['name' => 'Wolford', 'state_id' => 29],
                ['name' => 'Devils Lake', 'state_id' => 29],
                ['name' => 'Brocket', 'state_id' => 29],
                ['name' => 'Churchs Ferry', 'state_id' => 29],
                ['name' => 'Crary', 'state_id' => 29],
                ['name' => 'Edmore', 'state_id' => 29],
                ['name' => 'Hampden', 'state_id' => 29],
                ['name' => 'Lawton', 'state_id' => 29],
                ['name' => 'Penn', 'state_id' => 29],
                ['name' => 'Starkweather', 'state_id' => 29],
                ['name' => 'Webster', 'state_id' => 29],
                ['name' => 'Enderlin', 'state_id' => 29],
                ['name' => 'Fort Ransom', 'state_id' => 29],
                ['name' => 'Lisbon', 'state_id' => 29],
                ['name' => 'Mcleod', 'state_id' => 29],
                ['name' => 'Sheldon', 'state_id' => 29],
                ['name' => 'Glenburn', 'state_id' => 29],
                ['name' => 'Mohall', 'state_id' => 29],
                ['name' => 'Sherwood', 'state_id' => 29],
                ['name' => 'Tolley', 'state_id' => 29],
                ['name' => 'Abercrombie', 'state_id' => 29],
                ['name' => 'Barney', 'state_id' => 29],
                ['name' => 'Christine', 'state_id' => 29],
                ['name' => 'Colfax', 'state_id' => 29],
                ['name' => 'Fairmount', 'state_id' => 29],
                ['name' => 'Hankinson', 'state_id' => 29],
                ['name' => 'Lidgerwood', 'state_id' => 29],
                ['name' => 'Mantador', 'state_id' => 29],
                ['name' => 'Mooreton', 'state_id' => 29],
                ['name' => 'Wahpeton', 'state_id' => 29],
                ['name' => 'Walcott', 'state_id' => 29],
                ['name' => 'Wyndmere', 'state_id' => 29],
                ['name' => 'Agate', 'state_id' => 29],
                ['name' => 'Belcourt', 'state_id' => 29],
                ['name' => 'Dunseith', 'state_id' => 29],
                ['name' => 'Mylo', 'state_id' => 29],
                ['name' => 'Rolette', 'state_id' => 29],
                ['name' => 'Rolla', 'state_id' => 29],
                ['name' => 'Saint John', 'state_id' => 29],
                ['name' => 'Cayuga', 'state_id' => 29],
                ['name' => 'Cogswell', 'state_id' => 29],
                ['name' => 'Forman', 'state_id' => 29],
                ['name' => 'Gwinner', 'state_id' => 29],
                ['name' => 'Havana', 'state_id' => 29],
                ['name' => 'Milnor', 'state_id' => 29],
                ['name' => 'Rutland', 'state_id' => 29],
                ['name' => 'Stirum', 'state_id' => 29],
                ['name' => 'Denhoff', 'state_id' => 29],
                ['name' => 'Goodrich', 'state_id' => 29],
                ['name' => 'Mcclusky', 'state_id' => 29],
                ['name' => 'Martin', 'state_id' => 29],
                ['name' => 'Cannon Ball', 'state_id' => 29],
                ['name' => 'Fort Yates', 'state_id' => 29],
                ['name' => 'Selfridge', 'state_id' => 29],
                ['name' => 'Solen', 'state_id' => 29],
                ['name' => 'Amidon', 'state_id' => 29],
                ['name' => 'Marmarth', 'state_id' => 29],
                ['name' => 'Dickinson', 'state_id' => 29],
                ['name' => 'Belfield', 'state_id' => 29],
                ['name' => 'Gladstone', 'state_id' => 29],
                ['name' => 'Lefor', 'state_id' => 29],
                ['name' => 'Richardton', 'state_id' => 29],
                ['name' => 'South Heart', 'state_id' => 29],
                ['name' => 'Taylor', 'state_id' => 29],
                ['name' => 'Hope', 'state_id' => 29],
                ['name' => 'Luverne', 'state_id' => 29],
                ['name' => 'Finley', 'state_id' => 29],
                ['name' => 'Sharon', 'state_id' => 29],
                ['name' => 'Jamestown', 'state_id' => 29],
                ['name' => 'Buchanan', 'state_id' => 29],
                ['name' => 'Cleveland', 'state_id' => 29],
                ['name' => 'Courtenay', 'state_id' => 29],
                ['name' => 'Kensal', 'state_id' => 29],
                ['name' => 'Medina', 'state_id' => 29],
                ['name' => 'Montpelier', 'state_id' => 29],
                ['name' => 'Pingree', 'state_id' => 29],
                ['name' => 'Spiritwood', 'state_id' => 29],
                ['name' => 'Streeter', 'state_id' => 29],
                ['name' => 'Woodworth', 'state_id' => 29],
                ['name' => 'Ypsilanti', 'state_id' => 29],
                ['name' => 'Bisbee', 'state_id' => 29],
                ['name' => 'Cando', 'state_id' => 29],
                ['name' => 'Egeland', 'state_id' => 29],
                ['name' => 'Hansboro', 'state_id' => 29],
                ['name' => 'Perth', 'state_id' => 29],
                ['name' => 'Rocklake', 'state_id' => 29],
                ['name' => 'Blanchard', 'state_id' => 29],
                ['name' => 'Clifford', 'state_id' => 29],
                ['name' => 'Galesburg', 'state_id' => 29],
                ['name' => 'Hillsboro', 'state_id' => 29],
                ['name' => 'Buxton', 'state_id' => 29],
                ['name' => 'Caledonia', 'state_id' => 29],
                ['name' => 'Cummings', 'state_id' => 29],
                ['name' => 'Hatton', 'state_id' => 29],
                ['name' => 'Mayville', 'state_id' => 29],
                ['name' => 'Portland', 'state_id' => 29],
                ['name' => 'Adams', 'state_id' => 29],
                ['name' => 'Edinburg', 'state_id' => 29],
                ['name' => 'Fairdale', 'state_id' => 29],
                ['name' => 'Fordville', 'state_id' => 29],
                ['name' => 'Forest River', 'state_id' => 29],
                ['name' => 'Grafton', 'state_id' => 29],
                ['name' => 'Hoople', 'state_id' => 29],
                ['name' => 'Lankin', 'state_id' => 29],
                ['name' => 'Minto', 'state_id' => 29],
                ['name' => 'Park River', 'state_id' => 29],
                ['name' => 'Pisek', 'state_id' => 29],
                ['name' => 'Minot', 'state_id' => 29],
                ['name' => 'Minot Afb', 'state_id' => 29],
                ['name' => 'Berthold', 'state_id' => 29],
                ['name' => 'Burlington', 'state_id' => 29],
                ['name' => 'Carpio', 'state_id' => 29],
                ['name' => 'Des Lacs', 'state_id' => 29],
                ['name' => 'Donnybrook', 'state_id' => 29],
                ['name' => 'Douglas', 'state_id' => 29],
                ['name' => 'Kenmare', 'state_id' => 29],
                ['name' => 'Makoti', 'state_id' => 29],
                ['name' => 'Ryder', 'state_id' => 29],
                ['name' => 'Sawyer', 'state_id' => 29],
                ['name' => 'Surrey', 'state_id' => 29],
                ['name' => 'Harvey', 'state_id' => 29],
                ['name' => 'Bowdon', 'state_id' => 29],
                ['name' => 'Cathay', 'state_id' => 29],
                ['name' => 'Chaseley', 'state_id' => 29],
                ['name' => 'Fessenden', 'state_id' => 29],
                ['name' => 'Hurdsfield', 'state_id' => 29],
                ['name' => 'Sykeston', 'state_id' => 29],
                ['name' => 'Mcgregor', 'state_id' => 29],
                ['name' => 'Wildrose', 'state_id' => 29],
                ['name' => 'Williston', 'state_id' => 29],
                ['name' => 'Alamo', 'state_id' => 29],
                ['name' => 'Epping', 'state_id' => 29],
                ['name' => 'Grenora', 'state_id' => 29],
                ['name' => 'Ray', 'state_id' => 29],
                ['name' => 'Tioga', 'state_id' => 29],
                ['name' => 'Trenton', 'state_id' => 29],
                ['name' => 'Zahl', 'state_id' => 29]
            ]);
        }
    }
}
