<?php

use Illuminate\Database\Seeder;

class state41TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Cities for the state of SC - South Carolina.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                ['name' => 'Abbeville', 'state_id' => 41],
                ['name' => 'Calhoun Falls', 'state_id' => 41],
                ['name' => 'Donalds', 'state_id' => 41],
                ['name' => 'Due West', 'state_id' => 41],
                ['name' => 'Lowndesville', 'state_id' => 41],
                ['name' => 'Salley', 'state_id' => 41],
                ['name' => 'Wagener', 'state_id' => 41],
                ['name' => 'Aiken', 'state_id' => 41],
                ['name' => 'New Ellenton', 'state_id' => 41],
                ['name' => 'Bath', 'state_id' => 41],
                ['name' => 'Clearwater', 'state_id' => 41],
                ['name' => 'Gloverville', 'state_id' => 41],
                ['name' => 'Graniteville', 'state_id' => 41],
                ['name' => 'Jackson', 'state_id' => 41],
                ['name' => 'Langley', 'state_id' => 41],
                ['name' => 'Montmorenci', 'state_id' => 41],
                ['name' => 'North Augusta', 'state_id' => 41],
                ['name' => 'Beech Island', 'state_id' => 41],
                ['name' => 'Vaucluse', 'state_id' => 41],
                ['name' => 'Warrenville', 'state_id' => 41],
                ['name' => 'Windsor', 'state_id' => 41],
                ['name' => 'Allendale', 'state_id' => 41],
                ['name' => 'Fairfax', 'state_id' => 41],
                ['name' => 'Martin', 'state_id' => 41],
                ['name' => 'Sycamore', 'state_id' => 41],
                ['name' => 'Ulmer', 'state_id' => 41],
                ['name' => 'Anderson', 'state_id' => 41],
                ['name' => 'Belton', 'state_id' => 41],
                ['name' => 'Honea Path', 'state_id' => 41],
                ['name' => 'Iva', 'state_id' => 41],
                ['name' => 'La France', 'state_id' => 41],
                ['name' => 'Pelzer', 'state_id' => 41],
                ['name' => 'Pendleton', 'state_id' => 41],
                ['name' => 'Sandy Springs', 'state_id' => 41],
                ['name' => 'Starr', 'state_id' => 41],
                ['name' => 'Townville', 'state_id' => 41],
                ['name' => 'Williamston', 'state_id' => 41],
                ['name' => 'Bamberg', 'state_id' => 41],
                ['name' => 'Denmark', 'state_id' => 41],
                ['name' => 'Ehrhardt', 'state_id' => 41],
                ['name' => 'Olar', 'state_id' => 41],
                ['name' => 'Barnwell', 'state_id' => 41],
                ['name' => 'Hilda', 'state_id' => 41],
                ['name' => 'Blackville', 'state_id' => 41],
                ['name' => 'Elko', 'state_id' => 41],
                ['name' => 'Williston', 'state_id' => 41],
                ['name' => 'Beaufort', 'state_id' => 41],
                ['name' => 'Parris Island', 'state_id' => 41],
                ['name' => 'Bluffton', 'state_id' => 41],
                ['name' => 'Dale', 'state_id' => 41],
                ['name' => 'Daufuskie Island', 'state_id' => 41],
                ['name' => 'Saint Helena Island', 'state_id' => 41],
                ['name' => 'Hilton Head Island', 'state_id' => 41],
                ['name' => 'Lobeco', 'state_id' => 41],
                ['name' => 'Port Royal', 'state_id' => 41],
                ['name' => 'Seabrook', 'state_id' => 41],
                ['name' => 'Sheldon', 'state_id' => 41],
                ['name' => 'Hanahan', 'state_id' => 41],
                ['name' => 'Bonneau', 'state_id' => 41],
                ['name' => 'Cordesville', 'state_id' => 41],
                ['name' => 'Cross', 'state_id' => 41],
                ['name' => 'Goose Creek', 'state_id' => 41],
                ['name' => 'Huger', 'state_id' => 41],
                ['name' => 'Jamestown', 'state_id' => 41],
                ['name' => 'Ladson', 'state_id' => 41],
                ['name' => 'Moncks Corner', 'state_id' => 41],
                ['name' => 'Pineville', 'state_id' => 41],
                ['name' => 'Pinopolis', 'state_id' => 41],
                ['name' => 'Russellville', 'state_id' => 41],
                ['name' => 'Saint Stephen', 'state_id' => 41],
                ['name' => 'Summerville', 'state_id' => 41],
                ['name' => 'Charleston', 'state_id' => 41],
                ['name' => 'Cameron', 'state_id' => 41],
                ['name' => 'Saint Matthews', 'state_id' => 41],
                ['name' => 'Charleston Afb', 'state_id' => 41],
                ['name' => 'North Charleston', 'state_id' => 41],
                ['name' => 'Adams Run', 'state_id' => 41],
                ['name' => 'Awendaw', 'state_id' => 41],
                ['name' => 'Folly Beach', 'state_id' => 41],
                ['name' => 'Hollywood', 'state_id' => 41],
                ['name' => 'Isle Of Palms', 'state_id' => 41],
                ['name' => 'Johns Island', 'state_id' => 41],
                ['name' => 'Mc Clellanville', 'state_id' => 41],
                ['name' => 'Mount Pleasant', 'state_id' => 41],
                ['name' => 'Ravenel', 'state_id' => 41],
                ['name' => 'Sullivans Island', 'state_id' => 41],
                ['name' => 'Wadmalaw Island', 'state_id' => 41],
                ['name' => 'Gaffney', 'state_id' => 41],
                ['name' => 'Blacksburg', 'state_id' => 41],
                ['name' => 'Blackstock', 'state_id' => 41],
                ['name' => 'Great Falls', 'state_id' => 41],
                ['name' => 'Chester', 'state_id' => 41],
                ['name' => 'Edgemoor', 'state_id' => 41],
                ['name' => 'Fort Lawn', 'state_id' => 41],
                ['name' => 'Lando', 'state_id' => 41],
                ['name' => 'Richburg', 'state_id' => 41],
                ['name' => 'Mc Bee', 'state_id' => 41],
                ['name' => 'Cheraw', 'state_id' => 41],
                ['name' => 'Patrick', 'state_id' => 41],
                ['name' => 'Chesterfield', 'state_id' => 41],
                ['name' => 'Jefferson', 'state_id' => 41],
                ['name' => 'Mount Croghan', 'state_id' => 41],
                ['name' => 'Pageland', 'state_id' => 41],
                ['name' => 'Ruby', 'state_id' => 41],
                ['name' => 'Alcolu', 'state_id' => 41],
                ['name' => 'Davis Station', 'state_id' => 41],
                ['name' => 'Gable', 'state_id' => 41],
                ['name' => 'Manning', 'state_id' => 41],
                ['name' => 'New Zion', 'state_id' => 41],
                ['name' => 'Sardinia', 'state_id' => 41],
                ['name' => 'Summerton', 'state_id' => 41],
                ['name' => 'Turbeville', 'state_id' => 41],
                ['name' => 'Lodge', 'state_id' => 41],
                ['name' => 'Canadys', 'state_id' => 41],
                ['name' => 'Cottageville', 'state_id' => 41],
                ['name' => 'Edisto Island', 'state_id' => 41],
                ['name' => 'Green Pond', 'state_id' => 41],
                ['name' => 'Jacksonboro', 'state_id' => 41],
                ['name' => 'Round O', 'state_id' => 41],
                ['name' => 'Ruffin', 'state_id' => 41],
                ['name' => 'Smoaks', 'state_id' => 41],
                ['name' => 'Walterboro', 'state_id' => 41],
                ['name' => 'Williams', 'state_id' => 41],
                ['name' => 'Islandton', 'state_id' => 41],
                ['name' => 'Lamar', 'state_id' => 41],
                ['name' => 'Lydia', 'state_id' => 41],
                ['name' => 'Darlington', 'state_id' => 41],
                ['name' => 'Hartsville', 'state_id' => 41],
                ['name' => 'Society Hill', 'state_id' => 41],
                ['name' => 'Dillon', 'state_id' => 41],
                ['name' => 'Fork', 'state_id' => 41],
                ['name' => 'Hamer', 'state_id' => 41],
                ['name' => 'Lake View', 'state_id' => 41],
                ['name' => 'Latta', 'state_id' => 41],
                ['name' => 'Little Rock', 'state_id' => 41],
                ['name' => 'Dorchester', 'state_id' => 41],
                ['name' => 'Grover', 'state_id' => 41],
                ['name' => 'Harleyville', 'state_id' => 41],
                ['name' => 'Reevesville', 'state_id' => 41],
                ['name' => 'Ridgeville', 'state_id' => 41],
                ['name' => 'Saint George', 'state_id' => 41],
                ['name' => 'Edgefield', 'state_id' => 41],
                ['name' => 'Johnston', 'state_id' => 41],
                ['name' => 'Trenton', 'state_id' => 41],
                ['name' => 'Blair', 'state_id' => 41],
                ['name' => 'Jenkinsville', 'state_id' => 41],
                ['name' => 'Ridgeway', 'state_id' => 41],
                ['name' => 'Rion', 'state_id' => 41],
                ['name' => 'Winnsboro', 'state_id' => 41],
                ['name' => 'Olanta', 'state_id' => 41],
                ['name' => 'Timmonsville', 'state_id' => 41],
                ['name' => 'Florence', 'state_id' => 41],
                ['name' => 'Coward', 'state_id' => 41],
                ['name' => 'Effingham', 'state_id' => 41],
                ['name' => 'Johnsonville', 'state_id' => 41],
                ['name' => 'Lake City', 'state_id' => 41],
                ['name' => 'Pamplico', 'state_id' => 41],
                ['name' => 'Scranton', 'state_id' => 41],
                ['name' => 'Georgetown', 'state_id' => 41],
                ['name' => 'Andrews', 'state_id' => 41],
                ['name' => 'Murrells Inlet', 'state_id' => 41],
                ['name' => 'Pawleys Island', 'state_id' => 41],
                ['name' => 'Greenville', 'state_id' => 41],
                ['name' => 'Cleveland', 'state_id' => 41],
                ['name' => 'Conestee', 'state_id' => 41],
                ['name' => 'Fountain Inn', 'state_id' => 41],
                ['name' => 'Greer', 'state_id' => 41],
                ['name' => 'Marietta', 'state_id' => 41],
                ['name' => 'Mauldin', 'state_id' => 41],
                ['name' => 'Piedmont', 'state_id' => 41],
                ['name' => 'Simpsonville', 'state_id' => 41],
                ['name' => 'Slater', 'state_id' => 41],
                ['name' => 'Taylors', 'state_id' => 41],
                ['name' => 'Tigerville', 'state_id' => 41],
                ['name' => 'Travelers Rest', 'state_id' => 41],
                ['name' => 'Greenwood', 'state_id' => 41],
                ['name' => 'Hodges', 'state_id' => 41],
                ['name' => 'Ninety Six', 'state_id' => 41],
                ['name' => 'Ware Shoals', 'state_id' => 41],
                ['name' => 'Bradley', 'state_id' => 41],
                ['name' => 'Troy', 'state_id' => 41],
                ['name' => 'Brunson', 'state_id' => 41],
                ['name' => 'Crocketville', 'state_id' => 41],
                ['name' => 'Early Branch', 'state_id' => 41],
                ['name' => 'Estill', 'state_id' => 41],
                ['name' => 'Furman', 'state_id' => 41],
                ['name' => 'Garnett', 'state_id' => 41],
                ['name' => 'Gifford', 'state_id' => 41],
                ['name' => 'Hampton', 'state_id' => 41],
                ['name' => 'Luray', 'state_id' => 41],
                ['name' => 'Miley', 'state_id' => 41],
                ['name' => 'Scotia', 'state_id' => 41],
                ['name' => 'Varnville', 'state_id' => 41],
                ['name' => 'Yemassee', 'state_id' => 41],
                ['name' => 'Aynor', 'state_id' => 41],
                ['name' => 'Conway', 'state_id' => 41],
                ['name' => 'Galivants Ferry', 'state_id' => 41],
                ['name' => 'Green Sea', 'state_id' => 41],
                ['name' => 'Little River', 'state_id' => 41],
                ['name' => 'Longs', 'state_id' => 41],
                ['name' => 'Loris', 'state_id' => 41],
                ['name' => 'Myrtle Beach', 'state_id' => 41],
                ['name' => 'Nichols', 'state_id' => 41],
                ['name' => 'North Myrtle Beach', 'state_id' => 41],
                ['name' => 'Okatie', 'state_id' => 41],
                ['name' => 'Coosawhatchie', 'state_id' => 41],
                ['name' => 'Hardeeville', 'state_id' => 41],
                ['name' => 'Pineland', 'state_id' => 41],
                ['name' => 'Ridgeland', 'state_id' => 41],
                ['name' => 'Tillman', 'state_id' => 41],
                ['name' => 'Bethune', 'state_id' => 41],
                ['name' => 'Camden', 'state_id' => 41],
                ['name' => 'Cassatt', 'state_id' => 41],
                ['name' => 'Elgin', 'state_id' => 41],
                ['name' => 'Liberty Hill', 'state_id' => 41],
                ['name' => 'Lugoff', 'state_id' => 41],
                ['name' => 'Westville', 'state_id' => 41],
                ['name' => 'Heath Springs', 'state_id' => 41],
                ['name' => 'Kershaw', 'state_id' => 41],
                ['name' => 'Fort Mill', 'state_id' => 41],
                ['name' => 'Lancaster', 'state_id' => 41],
                ['name' => 'Van Wyck', 'state_id' => 41],
                ['name' => 'Clinton', 'state_id' => 41],
                ['name' => 'Cross Hill', 'state_id' => 41],
                ['name' => 'Joanna', 'state_id' => 41],
                ['name' => 'Laurens', 'state_id' => 41],
                ['name' => 'Mountville', 'state_id' => 41],
                ['name' => 'Waterloo', 'state_id' => 41],
                ['name' => 'Gray Court', 'state_id' => 41],
                ['name' => 'Bishopville', 'state_id' => 41],
                ['name' => 'Elliott', 'state_id' => 41],
                ['name' => 'Lynchburg', 'state_id' => 41],
                ['name' => 'Batesburg', 'state_id' => 41],
                ['name' => 'Cayce', 'state_id' => 41],
                ['name' => 'Chapin', 'state_id' => 41],
                ['name' => 'Gaston', 'state_id' => 41],
                ['name' => 'Gilbert', 'state_id' => 41],
                ['name' => 'Leesville', 'state_id' => 41],
                ['name' => 'Lexington', 'state_id' => 41],
                ['name' => 'Pelion', 'state_id' => 41],
                ['name' => 'Swansea', 'state_id' => 41],
                ['name' => 'West Columbia', 'state_id' => 41],
                ['name' => 'Columbia', 'state_id' => 41],
                ['name' => 'Clarks Hill', 'state_id' => 41],
                ['name' => 'Mc Cormick', 'state_id' => 41],
                ['name' => 'Modoc', 'state_id' => 41],
                ['name' => 'Mount Carmel', 'state_id' => 41],
                ['name' => 'Parksville', 'state_id' => 41],
                ['name' => 'Plum Branch', 'state_id' => 41],
                ['name' => 'Centenary', 'state_id' => 41],
                ['name' => 'Gresham', 'state_id' => 41],
                ['name' => 'Marion', 'state_id' => 41],
                ['name' => 'Mullins', 'state_id' => 41],
                ['name' => 'Rains', 'state_id' => 41],
                ['name' => 'Sellers', 'state_id' => 41],
                ['name' => 'Bennettsville', 'state_id' => 41],
                ['name' => 'Blenheim', 'state_id' => 41],
                ['name' => 'Clio', 'state_id' => 41],
                ['name' => 'Mc Coll', 'state_id' => 41],
                ['name' => 'Tatum', 'state_id' => 41],
                ['name' => 'Wallace', 'state_id' => 41],
                ['name' => 'Chappells', 'state_id' => 41],
                ['name' => 'Little Mountain', 'state_id' => 41],
                ['name' => 'Newberry', 'state_id' => 41],
                ['name' => 'Peak', 'state_id' => 41],
                ['name' => 'Pomaria', 'state_id' => 41],
                ['name' => 'Prosperity', 'state_id' => 41],
                ['name' => 'Silverstreet', 'state_id' => 41],
                ['name' => 'Whitmire', 'state_id' => 41],
                ['name' => 'Kinards', 'state_id' => 41],
                ['name' => 'Fair Play', 'state_id' => 41],
                ['name' => 'Long Creek', 'state_id' => 41],
                ['name' => 'Mountain Rest', 'state_id' => 41],
                ['name' => 'Newry', 'state_id' => 41],
                ['name' => 'Seneca', 'state_id' => 41],
                ['name' => 'Richland', 'state_id' => 41],
                ['name' => 'Salem', 'state_id' => 41],
                ['name' => 'Tamassee', 'state_id' => 41],
                ['name' => 'Walhalla', 'state_id' => 41],
                ['name' => 'Westminster', 'state_id' => 41],
                ['name' => 'West Union', 'state_id' => 41],
                ['name' => 'Bowman', 'state_id' => 41],
                ['name' => 'Cope', 'state_id' => 41],
                ['name' => 'Cordova', 'state_id' => 41],
                ['name' => 'Elloree', 'state_id' => 41],
                ['name' => 'Eutawville', 'state_id' => 41],
                ['name' => 'Holly Hill', 'state_id' => 41],
                ['name' => 'Neeses', 'state_id' => 41],
                ['name' => 'North', 'state_id' => 41],
                ['name' => 'Norway', 'state_id' => 41],
                ['name' => 'Orangeburg', 'state_id' => 41],
                ['name' => 'Rowesville', 'state_id' => 41],
                ['name' => 'Santee', 'state_id' => 41],
                ['name' => 'Springfield', 'state_id' => 41],
                ['name' => 'Vance', 'state_id' => 41],
                ['name' => 'Branchville', 'state_id' => 41],
                ['name' => 'Central', 'state_id' => 41],
                ['name' => 'Clemson', 'state_id' => 41],
                ['name' => 'Easley', 'state_id' => 41],
                ['name' => 'Liberty', 'state_id' => 41],
                ['name' => 'Norris', 'state_id' => 41],
                ['name' => 'Pickens', 'state_id' => 41],
                ['name' => 'Six Mile', 'state_id' => 41],
                ['name' => 'Sunset', 'state_id' => 41],
                ['name' => 'Ballentine', 'state_id' => 41],
                ['name' => 'Blythewood', 'state_id' => 41],
                ['name' => 'Eastover', 'state_id' => 41],
                ['name' => 'Gadsden', 'state_id' => 41],
                ['name' => 'Hopkins', 'state_id' => 41],
                ['name' => 'Irmo', 'state_id' => 41],
                ['name' => 'State Park', 'state_id' => 41],
                ['name' => 'White Rock', 'state_id' => 41],
                ['name' => 'Monetta', 'state_id' => 41],
                ['name' => 'Ridge Spring', 'state_id' => 41],
                ['name' => 'Saluda', 'state_id' => 41],
                ['name' => 'Ward', 'state_id' => 41],
                ['name' => 'Spartanburg', 'state_id' => 41],
                ['name' => 'Boiling Springs', 'state_id' => 41],
                ['name' => 'Arcadia', 'state_id' => 41],
                ['name' => 'Campobello', 'state_id' => 41],
                ['name' => 'Chesnee', 'state_id' => 41],
                ['name' => 'Clifton', 'state_id' => 41],
                ['name' => 'Converse', 'state_id' => 41],
                ['name' => 'Cowpens', 'state_id' => 41],
                ['name' => 'Cross Anchor', 'state_id' => 41],
                ['name' => 'Drayton', 'state_id' => 41],
                ['name' => 'Duncan', 'state_id' => 41],
                ['name' => 'Enoree', 'state_id' => 41],
                ['name' => 'Fairforest', 'state_id' => 41],
                ['name' => 'Fingerville', 'state_id' => 41],
                ['name' => 'Glendale', 'state_id' => 41],
                ['name' => 'Gramling', 'state_id' => 41],
                ['name' => 'Inman', 'state_id' => 41],
                ['name' => 'Landrum', 'state_id' => 41],
                ['name' => 'Lyman', 'state_id' => 41],
                ['name' => 'Mayo', 'state_id' => 41],
                ['name' => 'Moore', 'state_id' => 41],
                ['name' => 'Pacolet', 'state_id' => 41],
                ['name' => 'Pacolet Mills', 'state_id' => 41],
                ['name' => 'Pauline', 'state_id' => 41],
                ['name' => 'Reidville', 'state_id' => 41],
                ['name' => 'Roebuck', 'state_id' => 41],
                ['name' => 'Startex', 'state_id' => 41],
                ['name' => 'Una', 'state_id' => 41],
                ['name' => 'Wellford', 'state_id' => 41],
                ['name' => 'White Stone', 'state_id' => 41],
                ['name' => 'Woodruff', 'state_id' => 41],
                ['name' => 'Dalzell', 'state_id' => 41],
                ['name' => 'Horatio', 'state_id' => 41],
                ['name' => 'Mayesville', 'state_id' => 41],
                ['name' => 'Pinewood', 'state_id' => 41],
                ['name' => 'Rembert', 'state_id' => 41],
                ['name' => 'Sumter', 'state_id' => 41],
                ['name' => 'Shaw Afb', 'state_id' => 41],
                ['name' => 'Wedgefield', 'state_id' => 41],
                ['name' => 'Carlisle', 'state_id' => 41],
                ['name' => 'Buffalo', 'state_id' => 41],
                ['name' => 'Jonesville', 'state_id' => 41],
                ['name' => 'Lockhart', 'state_id' => 41],
                ['name' => 'Union', 'state_id' => 41],
                ['name' => 'Greeleyville', 'state_id' => 41],
                ['name' => 'Cades', 'state_id' => 41],
                ['name' => 'Hemingway', 'state_id' => 41],
                ['name' => 'Kingstree', 'state_id' => 41],
                ['name' => 'Lane', 'state_id' => 41],
                ['name' => 'Nesmith', 'state_id' => 41],
                ['name' => 'Salters', 'state_id' => 41],
                ['name' => 'Bowling Green', 'state_id' => 41],
                ['name' => 'Catawba', 'state_id' => 41],
                ['name' => 'Clover', 'state_id' => 41],
                ['name' => 'Hickory Grove', 'state_id' => 41],
                ['name' => 'Mc Connells', 'state_id' => 41],
                ['name' => 'Rock Hill', 'state_id' => 41],
                ['name' => 'Sharon', 'state_id' => 41],
                ['name' => 'Smyrna', 'state_id' => 41],
                ['name' => 'York', 'state_id' => 41]
            ]);
        }
    }
}
