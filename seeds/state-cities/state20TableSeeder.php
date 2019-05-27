<?php

use Illuminate\Database\Seeder;

class state20TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Cities for the state of MA - Massachusetts.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                ['name' => 'Buzzards Bay', 'state_id' => 20],
                ['name' => 'Cataumet', 'state_id' => 20],
                ['name' => 'East Falmouth', 'state_id' => 20],
                ['name' => 'East Sandwich', 'state_id' => 20],
                ['name' => 'Falmouth', 'state_id' => 20],
                ['name' => 'Woods Hole', 'state_id' => 20],
                ['name' => 'Monument Beach', 'state_id' => 20],
                ['name' => 'North Falmouth', 'state_id' => 20],
                ['name' => 'Pocasset', 'state_id' => 20],
                ['name' => 'Sagamore', 'state_id' => 20],
                ['name' => 'Sagamore Beach', 'state_id' => 20],
                ['name' => 'Sandwich', 'state_id' => 20],
                ['name' => 'West Falmouth', 'state_id' => 20],
                ['name' => 'Hyannis', 'state_id' => 20],
                ['name' => 'Barnstable', 'state_id' => 20],
                ['name' => 'Brewster', 'state_id' => 20],
                ['name' => 'Centerville', 'state_id' => 20],
                ['name' => 'Chatham', 'state_id' => 20],
                ['name' => 'Cotuit', 'state_id' => 20],
                ['name' => 'Cummaquid', 'state_id' => 20],
                ['name' => 'Dennis', 'state_id' => 20],
                ['name' => 'Dennis Port', 'state_id' => 20],
                ['name' => 'East Dennis', 'state_id' => 20],
                ['name' => 'Eastham', 'state_id' => 20],
                ['name' => 'East Orleans', 'state_id' => 20],
                ['name' => 'Forestdale', 'state_id' => 20],
                ['name' => 'Harwich', 'state_id' => 20],
                ['name' => 'Harwich Port', 'state_id' => 20],
                ['name' => 'Hyannis Port', 'state_id' => 20],
                ['name' => 'Marstons Mills', 'state_id' => 20],
                ['name' => 'Mashpee', 'state_id' => 20],
                ['name' => 'North Chatham', 'state_id' => 20],
                ['name' => 'North Eastham', 'state_id' => 20],
                ['name' => 'North Truro', 'state_id' => 20],
                ['name' => 'Orleans', 'state_id' => 20],
                ['name' => 'Osterville', 'state_id' => 20],
                ['name' => 'Provincetown', 'state_id' => 20],
                ['name' => 'South Chatham', 'state_id' => 20],
                ['name' => 'South Dennis', 'state_id' => 20],
                ['name' => 'South Harwich', 'state_id' => 20],
                ['name' => 'South Orleans', 'state_id' => 20],
                ['name' => 'South Wellfleet', 'state_id' => 20],
                ['name' => 'South Yarmouth', 'state_id' => 20],
                ['name' => 'Truro', 'state_id' => 20],
                ['name' => 'Wellfleet', 'state_id' => 20],
                ['name' => 'West Barnstable', 'state_id' => 20],
                ['name' => 'West Chatham', 'state_id' => 20],
                ['name' => 'West Dennis', 'state_id' => 20],
                ['name' => 'West Harwich', 'state_id' => 20],
                ['name' => 'West Hyannisport', 'state_id' => 20],
                ['name' => 'West Yarmouth', 'state_id' => 20],
                ['name' => 'Yarmouth Port', 'state_id' => 20],
                ['name' => 'East Otis', 'state_id' => 20],
                ['name' => 'Pittsfield', 'state_id' => 20],
                ['name' => 'Adams', 'state_id' => 20],
                ['name' => 'Ashley Falls', 'state_id' => 20],
                ['name' => 'Becket', 'state_id' => 20],
                ['name' => 'Berkshire', 'state_id' => 20],
                ['name' => 'Cheshire', 'state_id' => 20],
                ['name' => 'Dalton', 'state_id' => 20],
                ['name' => 'Glendale', 'state_id' => 20],
                ['name' => 'Great Barrington', 'state_id' => 20],
                ['name' => 'Hinsdale', 'state_id' => 20],
                ['name' => 'Housatonic', 'state_id' => 20],
                ['name' => 'Lanesborough', 'state_id' => 20],
                ['name' => 'Lee', 'state_id' => 20],
                ['name' => 'Lenox', 'state_id' => 20],
                ['name' => 'Lenox Dale', 'state_id' => 20],
                ['name' => 'Mill River', 'state_id' => 20],
                ['name' => 'Monterey', 'state_id' => 20],
                ['name' => 'North Adams', 'state_id' => 20],
                ['name' => 'North Egremont', 'state_id' => 20],
                ['name' => 'Otis', 'state_id' => 20],
                ['name' => 'Richmond', 'state_id' => 20],
                ['name' => 'Sandisfield', 'state_id' => 20],
                ['name' => 'Savoy', 'state_id' => 20],
                ['name' => 'Sheffield', 'state_id' => 20],
                ['name' => 'South Egremont', 'state_id' => 20],
                ['name' => 'Southfield', 'state_id' => 20],
                ['name' => 'South Lee', 'state_id' => 20],
                ['name' => 'Stockbridge', 'state_id' => 20],
                ['name' => 'Tyringham', 'state_id' => 20],
                ['name' => 'West Stockbridge', 'state_id' => 20],
                ['name' => 'Williamstown', 'state_id' => 20],
                ['name' => 'Windsor', 'state_id' => 20],
                ['name' => 'Drury', 'state_id' => 20],
                ['name' => 'Mansfield', 'state_id' => 20],
                ['name' => 'Easton', 'state_id' => 20],
                ['name' => 'North Easton', 'state_id' => 20],
                ['name' => 'South Easton', 'state_id' => 20],
                ['name' => 'Assonet', 'state_id' => 20],
                ['name' => 'Attleboro', 'state_id' => 20],
                ['name' => 'Chartley', 'state_id' => 20],
                ['name' => 'Dartmouth', 'state_id' => 20],
                ['name' => 'Dighton', 'state_id' => 20],
                ['name' => 'East Freetown', 'state_id' => 20],
                ['name' => 'East Taunton', 'state_id' => 20],
                ['name' => 'Fairhaven', 'state_id' => 20],
                ['name' => 'Fall River', 'state_id' => 20],
                ['name' => 'Somerset', 'state_id' => 20],
                ['name' => 'New Bedford', 'state_id' => 20],
                ['name' => 'Acushnet', 'state_id' => 20],
                ['name' => 'North Dartmouth', 'state_id' => 20],
                ['name' => 'South Dartmouth', 'state_id' => 20],
                ['name' => 'North Attleboro', 'state_id' => 20],
                ['name' => 'Attleboro Falls', 'state_id' => 20],
                ['name' => 'North Dighton', 'state_id' => 20],
                ['name' => 'Norton', 'state_id' => 20],
                ['name' => 'Raynham', 'state_id' => 20],
                ['name' => 'Raynham Center', 'state_id' => 20],
                ['name' => 'Rehoboth', 'state_id' => 20],
                ['name' => 'Seekonk', 'state_id' => 20],
                ['name' => 'Swansea', 'state_id' => 20],
                ['name' => 'Berkley', 'state_id' => 20],
                ['name' => 'Taunton', 'state_id' => 20],
                ['name' => 'Westport', 'state_id' => 20],
                ['name' => 'Westport Point', 'state_id' => 20],
                ['name' => 'Chilmark', 'state_id' => 20],
                ['name' => 'Edgartown', 'state_id' => 20],
                ['name' => 'Menemsha', 'state_id' => 20],
                ['name' => 'Oak Bluffs', 'state_id' => 20],
                ['name' => 'Vineyard Haven', 'state_id' => 20],
                ['name' => 'West Tisbury', 'state_id' => 20],
                ['name' => 'Cuttyhunk', 'state_id' => 20],
                ['name' => 'Andover', 'state_id' => 20],
                ['name' => 'Haverhill', 'state_id' => 20],
                ['name' => 'Georgetown', 'state_id' => 20],
                ['name' => 'Groveland', 'state_id' => 20],
                ['name' => 'Lawrence', 'state_id' => 20],
                ['name' => 'Methuen', 'state_id' => 20],
                ['name' => 'North Andover', 'state_id' => 20],
                ['name' => 'Merrimac', 'state_id' => 20],
                ['name' => 'West Boxford', 'state_id' => 20],
                ['name' => 'Lynn', 'state_id' => 20],
                ['name' => 'Saugus', 'state_id' => 20],
                ['name' => 'Swampscott', 'state_id' => 20],
                ['name' => 'Nahant', 'state_id' => 20],
                ['name' => 'Amesbury', 'state_id' => 20],
                ['name' => 'Beverly', 'state_id' => 20],
                ['name' => 'Boxford', 'state_id' => 20],
                ['name' => 'Byfield', 'state_id' => 20],
                ['name' => 'Danvers', 'state_id' => 20],
                ['name' => 'Essex', 'state_id' => 20],
                ['name' => 'Gloucester', 'state_id' => 20],
                ['name' => 'Hamilton', 'state_id' => 20],
                ['name' => 'Hathorne', 'state_id' => 20],
                ['name' => 'Ipswich', 'state_id' => 20],
                ['name' => 'Lynnfield', 'state_id' => 20],
                ['name' => 'Manchester', 'state_id' => 20],
                ['name' => 'Marblehead', 'state_id' => 20],
                ['name' => 'Middleton', 'state_id' => 20],
                ['name' => 'Newburyport', 'state_id' => 20],
                ['name' => 'Newbury', 'state_id' => 20],
                ['name' => 'Salisbury', 'state_id' => 20],
                ['name' => 'Peabody', 'state_id' => 20],
                ['name' => 'Prides Crossing', 'state_id' => 20],
                ['name' => 'Rockport', 'state_id' => 20],
                ['name' => 'Rowley', 'state_id' => 20],
                ['name' => 'Salem', 'state_id' => 20],
                ['name' => 'South Hamilton', 'state_id' => 20],
                ['name' => 'Topsfield', 'state_id' => 20],
                ['name' => 'Wenham', 'state_id' => 20],
                ['name' => 'West Newbury', 'state_id' => 20],
                ['name' => 'Leverett', 'state_id' => 20],
                ['name' => 'Shutesbury', 'state_id' => 20],
                ['name' => 'Whately', 'state_id' => 20],
                ['name' => 'Greenfield', 'state_id' => 20],
                ['name' => 'Ashfield', 'state_id' => 20],
                ['name' => 'Bernardston', 'state_id' => 20],
                ['name' => 'Buckland', 'state_id' => 20],
                ['name' => 'Charlemont', 'state_id' => 20],
                ['name' => 'Colrain', 'state_id' => 20],
                ['name' => 'Conway', 'state_id' => 20],
                ['name' => 'Deerfield', 'state_id' => 20],
                ['name' => 'Erving', 'state_id' => 20],
                ['name' => 'Heath', 'state_id' => 20],
                ['name' => 'Lake Pleasant', 'state_id' => 20],
                ['name' => 'Millers Falls', 'state_id' => 20],
                ['name' => 'Monroe Bridge', 'state_id' => 20],
                ['name' => 'Montague', 'state_id' => 20],
                ['name' => 'Gill', 'state_id' => 20],
                ['name' => 'New Salem', 'state_id' => 20],
                ['name' => 'Northfield', 'state_id' => 20],
                ['name' => 'Orange', 'state_id' => 20],
                ['name' => 'Rowe', 'state_id' => 20],
                ['name' => 'Shelburne Falls', 'state_id' => 20],
                ['name' => 'South Deerfield', 'state_id' => 20],
                ['name' => 'Sunderland', 'state_id' => 20],
                ['name' => 'Turners Falls', 'state_id' => 20],
                ['name' => 'Warwick', 'state_id' => 20],
                ['name' => 'Wendell', 'state_id' => 20],
                ['name' => 'Wendell Depot', 'state_id' => 20],
                ['name' => 'Agawam', 'state_id' => 20],
                ['name' => 'Blandford', 'state_id' => 20],
                ['name' => 'Bondsville', 'state_id' => 20],
                ['name' => 'Brimfield', 'state_id' => 20],
                ['name' => 'Chester', 'state_id' => 20],
                ['name' => 'Chicopee', 'state_id' => 20],
                ['name' => 'East Longmeadow', 'state_id' => 20],
                ['name' => 'Feeding Hills', 'state_id' => 20],
                ['name' => 'Granville', 'state_id' => 20],
                ['name' => 'Hampden', 'state_id' => 20],
                ['name' => 'Holyoke', 'state_id' => 20],
                ['name' => 'Ludlow', 'state_id' => 20],
                ['name' => 'Monson', 'state_id' => 20],
                ['name' => 'Palmer', 'state_id' => 20],
                ['name' => 'Russell', 'state_id' => 20],
                ['name' => 'Southwick', 'state_id' => 20],
                ['name' => 'Thorndike', 'state_id' => 20],
                ['name' => 'Three Rivers', 'state_id' => 20],
                ['name' => 'Wales', 'state_id' => 20],
                ['name' => 'Westfield', 'state_id' => 20],
                ['name' => 'West Springfield', 'state_id' => 20],
                ['name' => 'Wilbraham', 'state_id' => 20],
                ['name' => 'Woronoco', 'state_id' => 20],
                ['name' => 'Springfield', 'state_id' => 20],
                ['name' => 'Longmeadow', 'state_id' => 20],
                ['name' => 'Indian Orchard', 'state_id' => 20],
                ['name' => 'Holland', 'state_id' => 20],
                ['name' => 'Amherst', 'state_id' => 20],
                ['name' => 'Belchertown', 'state_id' => 20],
                ['name' => 'Chesterfield', 'state_id' => 20],
                ['name' => 'Cummington', 'state_id' => 20],
                ['name' => 'Easthampton', 'state_id' => 20],
                ['name' => 'Goshen', 'state_id' => 20],
                ['name' => 'Granby', 'state_id' => 20],
                ['name' => 'Hadley', 'state_id' => 20],
                ['name' => 'Hatfield', 'state_id' => 20],
                ['name' => 'Haydenville', 'state_id' => 20],
                ['name' => 'Huntington', 'state_id' => 20],
                ['name' => 'Leeds', 'state_id' => 20],
                ['name' => 'North Amherst', 'state_id' => 20],
                ['name' => 'Northampton', 'state_id' => 20],
                ['name' => 'Florence', 'state_id' => 20],
                ['name' => 'North Hatfield', 'state_id' => 20],
                ['name' => 'Plainfield', 'state_id' => 20],
                ['name' => 'Southampton', 'state_id' => 20],
                ['name' => 'South Hadley', 'state_id' => 20],
                ['name' => 'Ware', 'state_id' => 20],
                ['name' => 'West Chesterfield', 'state_id' => 20],
                ['name' => 'West Hatfield', 'state_id' => 20],
                ['name' => 'Williamsburg', 'state_id' => 20],
                ['name' => 'Worthington', 'state_id' => 20],
                ['name' => 'Middlefield', 'state_id' => 20],
                ['name' => 'Ashby', 'state_id' => 20],
                ['name' => 'Ayer', 'state_id' => 20],
                ['name' => 'Groton', 'state_id' => 20],
                ['name' => 'Littleton', 'state_id' => 20],
                ['name' => 'Pepperell', 'state_id' => 20],
                ['name' => 'Shirley', 'state_id' => 20],
                ['name' => 'Townsend', 'state_id' => 20],
                ['name' => 'West Groton', 'state_id' => 20],
                ['name' => 'West Townsend', 'state_id' => 20],
                ['name' => 'Framingham', 'state_id' => 20],
                ['name' => 'Acton', 'state_id' => 20],
                ['name' => 'Boxborough', 'state_id' => 20],
                ['name' => 'Ashland', 'state_id' => 20],
                ['name' => 'Bedford', 'state_id' => 20],
                ['name' => 'Hanscom Afb', 'state_id' => 20],
                ['name' => 'Carlisle', 'state_id' => 20],
                ['name' => 'Concord', 'state_id' => 20],
                ['name' => 'Holliston', 'state_id' => 20],
                ['name' => 'Hopkinton', 'state_id' => 20],
                ['name' => 'Hudson', 'state_id' => 20],
                ['name' => 'Marlborough', 'state_id' => 20],
                ['name' => 'Maynard', 'state_id' => 20],
                ['name' => 'Natick', 'state_id' => 20],
                ['name' => 'Sherborn', 'state_id' => 20],
                ['name' => 'Lincoln', 'state_id' => 20],
                ['name' => 'Stow', 'state_id' => 20],
                ['name' => 'Sudbury', 'state_id' => 20],
                ['name' => 'Wayland', 'state_id' => 20],
                ['name' => 'Woodville', 'state_id' => 20],
                ['name' => 'Woburn', 'state_id' => 20],
                ['name' => 'Burlington', 'state_id' => 20],
                ['name' => 'Billerica', 'state_id' => 20],
                ['name' => 'Chelmsford', 'state_id' => 20],
                ['name' => 'Dracut', 'state_id' => 20],
                ['name' => 'Dunstable', 'state_id' => 20],
                ['name' => 'Lowell', 'state_id' => 20],
                ['name' => 'North Billerica', 'state_id' => 20],
                ['name' => 'North Chelmsford', 'state_id' => 20],
                ['name' => 'North Reading', 'state_id' => 20],
                ['name' => 'Nutting Lake', 'state_id' => 20],
                ['name' => 'Pinehurst', 'state_id' => 20],
                ['name' => 'Reading', 'state_id' => 20],
                ['name' => 'Tewksbury', 'state_id' => 20],
                ['name' => 'Tyngsboro', 'state_id' => 20],
                ['name' => 'Wakefield', 'state_id' => 20],
                ['name' => 'Westford', 'state_id' => 20],
                ['name' => 'Wilmington', 'state_id' => 20],
                ['name' => 'Winchester', 'state_id' => 20],
                ['name' => 'Cambridge', 'state_id' => 20],
                ['name' => 'Somerville', 'state_id' => 20],
                ['name' => 'Malden', 'state_id' => 20],
                ['name' => 'Everett', 'state_id' => 20],
                ['name' => 'Medford', 'state_id' => 20],
                ['name' => 'West Medford', 'state_id' => 20],
                ['name' => 'Melrose', 'state_id' => 20],
                ['name' => 'Stoneham', 'state_id' => 20],
                ['name' => 'Boston', 'state_id' => 20],
                ['name' => 'Lexington', 'state_id' => 20],
                ['name' => 'Waltham', 'state_id' => 20],
                ['name' => 'North Waltham', 'state_id' => 20],
                ['name' => 'New Town', 'state_id' => 20],
                ['name' => 'Newton', 'state_id' => 20],
                ['name' => 'Newton Center', 'state_id' => 20],
                ['name' => 'Newtonville', 'state_id' => 20],
                ['name' => 'Newton Highlands', 'state_id' => 20],
                ['name' => 'Newton Lower Falls', 'state_id' => 20],
                ['name' => 'Newton Upper Falls', 'state_id' => 20],
                ['name' => 'West Newton', 'state_id' => 20],
                ['name' => 'Auburndale', 'state_id' => 20],
                ['name' => 'Chestnut Hill', 'state_id' => 20],
                ['name' => 'Waban', 'state_id' => 20],
                ['name' => 'Watertown', 'state_id' => 20],
                ['name' => 'Arlington', 'state_id' => 20],
                ['name' => 'Arlington Heights', 'state_id' => 20],
                ['name' => 'Belmont', 'state_id' => 20],
                ['name' => 'Waverley', 'state_id' => 20],
                ['name' => 'Weston', 'state_id' => 20],
                ['name' => 'Nonantum', 'state_id' => 20],
                ['name' => 'Nantucket', 'state_id' => 20],
                ['name' => 'Siasconset', 'state_id' => 20],
                ['name' => 'Bellingham', 'state_id' => 20],
                ['name' => 'Canton', 'state_id' => 20],
                ['name' => 'Cohasset', 'state_id' => 20],
                ['name' => 'Dedham', 'state_id' => 20],
                ['name' => 'Dover', 'state_id' => 20],
                ['name' => 'East Walpole', 'state_id' => 20],
                ['name' => 'Foxboro', 'state_id' => 20],
                ['name' => 'Franklin', 'state_id' => 20],
                ['name' => 'Medfield', 'state_id' => 20],
                ['name' => 'Medway', 'state_id' => 20],
                ['name' => 'Millis', 'state_id' => 20],
                ['name' => 'Norfolk', 'state_id' => 20],
                ['name' => 'Norwood', 'state_id' => 20],
                ['name' => 'Sharon', 'state_id' => 20],
                ['name' => 'Sheldonville', 'state_id' => 20],
                ['name' => 'South Walpole', 'state_id' => 20],
                ['name' => 'Stoughton', 'state_id' => 20],
                ['name' => 'Walpole', 'state_id' => 20],
                ['name' => 'Westwood', 'state_id' => 20],
                ['name' => 'Wrentham', 'state_id' => 20],
                ['name' => 'Quincy', 'state_id' => 20],
                ['name' => 'Braintree', 'state_id' => 20],
                ['name' => 'Milton', 'state_id' => 20],
                ['name' => 'Milton Village', 'state_id' => 20],
                ['name' => 'Weymouth', 'state_id' => 20],
                ['name' => 'East Weymouth', 'state_id' => 20],
                ['name' => 'South Weymouth', 'state_id' => 20],
                ['name' => 'North Weymouth', 'state_id' => 20],
                ['name' => 'Avon', 'state_id' => 20],
                ['name' => 'Holbrook', 'state_id' => 20],
                ['name' => 'Randolph', 'state_id' => 20],
                ['name' => 'Brookline', 'state_id' => 20],
                ['name' => 'Brookline Village', 'state_id' => 20],
                ['name' => 'Babson Park', 'state_id' => 20],
                ['name' => 'Wellesley Hills', 'state_id' => 20],
                ['name' => 'Wellesley', 'state_id' => 20],
                ['name' => 'Needham', 'state_id' => 20],
                ['name' => 'Needham Heights', 'state_id' => 20],
                ['name' => 'Plainville', 'state_id' => 20],
                ['name' => 'Accord', 'state_id' => 20],
                ['name' => 'Brant Rock', 'state_id' => 20],
                ['name' => 'Greenbush', 'state_id' => 20],
                ['name' => 'Green Harbor', 'state_id' => 20],
                ['name' => 'Hingham', 'state_id' => 20],
                ['name' => 'Hull', 'state_id' => 20],
                ['name' => 'Humarock', 'state_id' => 20],
                ['name' => 'Marshfield', 'state_id' => 20],
                ['name' => 'Marshfield Hills', 'state_id' => 20],
                ['name' => 'Minot', 'state_id' => 20],
                ['name' => 'North Marshfield', 'state_id' => 20],
                ['name' => 'North Scituate', 'state_id' => 20],
                ['name' => 'Norwell', 'state_id' => 20],
                ['name' => 'Ocean Bluff', 'state_id' => 20],
                ['name' => 'Scituate', 'state_id' => 20],
                ['name' => 'Brockton', 'state_id' => 20],
                ['name' => 'Bridgewater', 'state_id' => 20],
                ['name' => 'Bryantville', 'state_id' => 20],
                ['name' => 'Carver', 'state_id' => 20],
                ['name' => 'Duxbury', 'state_id' => 20],
                ['name' => 'East Bridgewater', 'state_id' => 20],
                ['name' => 'Elmwood', 'state_id' => 20],
                ['name' => 'Halifax', 'state_id' => 20],
                ['name' => 'Hanover', 'state_id' => 20],
                ['name' => 'Hanson', 'state_id' => 20],
                ['name' => 'Middleboro', 'state_id' => 20],
                ['name' => 'Manomet', 'state_id' => 20],
                ['name' => 'Lakeville', 'state_id' => 20],
                ['name' => 'Monponsett', 'state_id' => 20],
                ['name' => 'Abington', 'state_id' => 20],
                ['name' => 'North Carver', 'state_id' => 20],
                ['name' => 'North Pembroke', 'state_id' => 20],
                ['name' => 'Pembroke', 'state_id' => 20],
                ['name' => 'Plymouth', 'state_id' => 20],
                ['name' => 'Kingston', 'state_id' => 20],
                ['name' => 'South Carver', 'state_id' => 20],
                ['name' => 'Plympton', 'state_id' => 20],
                ['name' => 'Rockland', 'state_id' => 20],
                ['name' => 'West Bridgewater', 'state_id' => 20],
                ['name' => 'White Horse Beach', 'state_id' => 20],
                ['name' => 'Whitman', 'state_id' => 20],
                ['name' => 'East Wareham', 'state_id' => 20],
                ['name' => 'Onset', 'state_id' => 20],
                ['name' => 'Wareham', 'state_id' => 20],
                ['name' => 'West Wareham', 'state_id' => 20],
                ['name' => 'Marion', 'state_id' => 20],
                ['name' => 'Mattapoisett', 'state_id' => 20],
                ['name' => 'Rochester', 'state_id' => 20],
                ['name' => 'Roxbury', 'state_id' => 20],
                ['name' => 'Roxbury Crossing', 'state_id' => 20],
                ['name' => 'Dorchester', 'state_id' => 20],
                ['name' => 'Dorchester Center', 'state_id' => 20],
                ['name' => 'Mattapan', 'state_id' => 20],
                ['name' => 'Charlestown', 'state_id' => 20],
                ['name' => 'Jamaica Plain', 'state_id' => 20],
                ['name' => 'Roslindale', 'state_id' => 20],
                ['name' => 'West Roxbury', 'state_id' => 20],
                ['name' => 'Allston', 'state_id' => 20],
                ['name' => 'Brighton', 'state_id' => 20],
                ['name' => 'Hyde Park', 'state_id' => 20],
                ['name' => 'Readville', 'state_id' => 20],
                ['name' => 'Chelsea', 'state_id' => 20],
                ['name' => 'Revere', 'state_id' => 20],
                ['name' => 'Winthrop', 'state_id' => 20],
                ['name' => 'Barre', 'state_id' => 20],
                ['name' => 'Gilbertville', 'state_id' => 20],
                ['name' => 'Hardwick', 'state_id' => 20],
                ['name' => 'Oakham', 'state_id' => 20],
                ['name' => 'South Barre', 'state_id' => 20],
                ['name' => 'Warren', 'state_id' => 20],
                ['name' => 'West Warren', 'state_id' => 20],
                ['name' => 'Wheelwright', 'state_id' => 20],
                ['name' => 'Athol', 'state_id' => 20],
                ['name' => 'Petersham', 'state_id' => 20],
                ['name' => 'Royalston', 'state_id' => 20],
                ['name' => 'Fitchburg', 'state_id' => 20],
                ['name' => 'Ashburnham', 'state_id' => 20],
                ['name' => 'Devens', 'state_id' => 20],
                ['name' => 'Baldwinville', 'state_id' => 20],
                ['name' => 'East Templeton', 'state_id' => 20],
                ['name' => 'Gardner', 'state_id' => 20],
                ['name' => 'Westminster', 'state_id' => 20],
                ['name' => 'Harvard', 'state_id' => 20],
                ['name' => 'Hubbardston', 'state_id' => 20],
                ['name' => 'Leominster', 'state_id' => 20],
                ['name' => 'Lunenburg', 'state_id' => 20],
                ['name' => 'Still River', 'state_id' => 20],
                ['name' => 'Templeton', 'state_id' => 20],
                ['name' => 'Winchendon', 'state_id' => 20],
                ['name' => 'Auburn', 'state_id' => 20],
                ['name' => 'Berlin', 'state_id' => 20],
                ['name' => 'Blackstone', 'state_id' => 20],
                ['name' => 'Boylston', 'state_id' => 20],
                ['name' => 'Brookfield', 'state_id' => 20],
                ['name' => 'Charlton', 'state_id' => 20],
                ['name' => 'Charlton City', 'state_id' => 20],
                ['name' => 'Charlton Depot', 'state_id' => 20],
                ['name' => 'Clinton', 'state_id' => 20],
                ['name' => 'East Brookfield', 'state_id' => 20],
                ['name' => 'Douglas', 'state_id' => 20],
                ['name' => 'Fiskdale', 'state_id' => 20],
                ['name' => 'Grafton', 'state_id' => 20],
                ['name' => 'Holden', 'state_id' => 20],
                ['name' => 'Jefferson', 'state_id' => 20],
                ['name' => 'Lancaster', 'state_id' => 20],
                ['name' => 'Leicester', 'state_id' => 20],
                ['name' => 'Linwood', 'state_id' => 20],
                ['name' => 'Manchaug', 'state_id' => 20],
                ['name' => 'Millbury', 'state_id' => 20],
                ['name' => 'Millville', 'state_id' => 20],
                ['name' => 'New Braintree', 'state_id' => 20],
                ['name' => 'Northborough', 'state_id' => 20],
                ['name' => 'Northbridge', 'state_id' => 20],
                ['name' => 'North Brookfield', 'state_id' => 20],
                ['name' => 'North Grafton', 'state_id' => 20],
                ['name' => 'North Oxford', 'state_id' => 20],
                ['name' => 'North Uxbridge', 'state_id' => 20],
                ['name' => 'Oxford', 'state_id' => 20],
                ['name' => 'Princeton', 'state_id' => 20],
                ['name' => 'Rochdale', 'state_id' => 20],
                ['name' => 'Rutland', 'state_id' => 20],
                ['name' => 'Shrewsbury', 'state_id' => 20],
                ['name' => 'Southbridge', 'state_id' => 20],
                ['name' => 'South Grafton', 'state_id' => 20],
                ['name' => 'South Lancaster', 'state_id' => 20],
                ['name' => 'Spencer', 'state_id' => 20],
                ['name' => 'Sterling', 'state_id' => 20],
                ['name' => 'Sturbridge', 'state_id' => 20],
                ['name' => 'Upton', 'state_id' => 20],
                ['name' => 'Uxbridge', 'state_id' => 20],
                ['name' => 'Webster', 'state_id' => 20],
                ['name' => 'Dudley', 'state_id' => 20],
                ['name' => 'Westborough', 'state_id' => 20],
                ['name' => 'West Boylston', 'state_id' => 20],
                ['name' => 'West Brookfield', 'state_id' => 20],
                ['name' => 'West Millbury', 'state_id' => 20],
                ['name' => 'Whitinsville', 'state_id' => 20],
                ['name' => 'Sutton', 'state_id' => 20],
                ['name' => 'Worcester', 'state_id' => 20],
                ['name' => 'Cherry Valley', 'state_id' => 20],
                ['name' => 'Paxton', 'state_id' => 20],
                ['name' => 'Bolton', 'state_id' => 20],
                ['name' => 'Fayville', 'state_id' => 20],
                ['name' => 'Hopedale', 'state_id' => 20],
                ['name' => 'Mendon', 'state_id' => 20],
                ['name' => 'Milford', 'state_id' => 20],
                ['name' => 'Southborough', 'state_id' => 20]
            ]);
        }
    }
}
