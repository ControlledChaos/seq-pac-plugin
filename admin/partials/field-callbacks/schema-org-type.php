<?php
/**
 * SCallback for the Schema organization type field.
 *
 * @package    Sequoia_Pacific_Realty_Plugin
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Seq_Pac_Plugin\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$types = [

	// First option save null.
	null          => __( 'Select one&hellip;', 'seq-pac-plugin' ),
	'Airline'     => __( 'Airline', 'seq-pac-plugin' ),
	'Corporation' => __( 'Corporation', 'seq-pac-plugin' ),

	// Educational Organizations.
	'EducationalOrganization' => __( 'Educational Organization', 'seq-pac-plugin' ),
		'CollegeOrUniversity' => __( '— College or University', 'seq-pac-plugin' ),
		'ElementarySchool'    => __( '— Elementary School', 'seq-pac-plugin' ),
		'HighSchool'          => __( '— High School', 'seq-pac-plugin' ),
		'MiddleSchool'        => __( '— Middle School', 'seq-pac-plugin' ),
		'Preschool'           => __( '— Preschool', 'seq-pac-plugin' ),
		'School'              => __( '— School', 'seq-pac-plugin' ),

	'GovernmentOrganization'  => __( 'Government Organization', 'seq-pac-plugin' ),

	// Local Businesses.
	'LocalBusiness' => __( 'Local Business', 'seq-pac-plugin' ),
		'AnimalShelter' => __( '— Animal Shelter', 'seq-pac-plugin' ),

		// Automotive Businesses.
		'AutomotiveBusiness' => __( '— Automotive Business', 'seq-pac-plugin' ),
			'AutoBodyShop'     => __( '—— Auto Body Shop', 'seq-pac-plugin' ),
			'AutoDealer'       => __( '—— Auto Dealer', 'seq-pac-plugin' ),
			'AutoPartsStore'   => __( '—— Auto Parts Store', 'seq-pac-plugin' ),
			'AutoRental'       => __( '—— Auto Rental', 'seq-pac-plugin' ),
			'AutoRepair'       => __( '—— Auto Repair', 'seq-pac-plugin' ),
			'AutoWash'         => __( '—— Auto Wash', 'seq-pac-plugin' ),
			'GasStation'       => __( '—— Gas Station', 'seq-pac-plugin' ),
			'MotorcycleDealer' => __( '—— Motorcycle Dealer', 'seq-pac-plugin' ),
			'MotorcycleRepair' => __( '—— Motorcycle Repair', 'seq-pac-plugin' ),

		'ChildCare'            => __( '— Child Care', 'seq-pac-plugin' ),
		'Dentist'              => __( '— Dentist', 'seq-pac-plugin' ),
		'DryCleaningOrLaundry' => __( '— Dry Cleaning or Laundry', 'seq-pac-plugin' ),

		// Emergency Services.
		'EmergencyService' => __( '— Emergency Service', 'seq-pac-plugin' ),
			'FireStation'   => __( '—— Fire Station', 'seq-pac-plugin' ),
			'Hospital'      => __( '—— Hospital', 'seq-pac-plugin' ),
			'PoliceStation' => __( '—— Police Station', 'seq-pac-plugin' ),

		'EmploymentAgency' => __( '— Employment Agency', 'seq-pac-plugin' ),

		// Entertainment Businesses.
		'EntertainmentBusiness' => __( '— Entertainment Business', 'seq-pac-plugin' ),
			'AdultEntertainment' => __( '—— Adult Entertainment', 'seq-pac-plugin' ),
			'AmusementPark'      => __( '—— Amusement Park', 'seq-pac-plugin' ),
			'ArtGallery'         => __( '—— Art Gallery', 'seq-pac-plugin' ),
			'Casino'             => __( '—— Casino', 'seq-pac-plugin' ),
			'ComedyClub'         => __( '—— Comedy Club', 'seq-pac-plugin' ),
			'MovieTheater'       => __( '—— Movie Theater', 'seq-pac-plugin' ),
			'NightClub'          => __( '—— Night Club', 'seq-pac-plugin' ),

		// Financial Services.
		'FinancialService' => __( '— Financial Service', 'seq-pac-plugin' ),
			'AccountingService' => __( '—— Accounting Service', 'seq-pac-plugin' ),
			'AutomatedTeller'   => __( '—— Automated Teller', 'seq-pac-plugin' ),
			'BankOrCreditUnion' => __( '—— Bank or Credit Union', 'seq-pac-plugin' ),
			'InsuranceAgency'   => __( '—— Insurance Agency', 'seq-pac-plugin' ),

		// Food Establishments.
		'FoodEstablishment' => __( '— Food Establishment', 'seq-pac-plugin' ),
			'Bakery'             => __( '—— Bakery', 'seq-pac-plugin' ),
			'BarOrPub'           => __( '—— Bar or Pub', 'seq-pac-plugin' ),
			'Brewery'            => __( '—— Brewery', 'seq-pac-plugin' ),
			'CafeOrCoffeeShop'   => __( '—— Cafe or Coffee Shop', 'seq-pac-plugin' ),
			'FastFoodRestaurant' => __( '—— Fast Food Restaurant', 'seq-pac-plugin' ),
			'IceCreamShop'       => __( '—— Ice Cream Shop', 'seq-pac-plugin' ),
			'Restaurant'         => __( '—— Restaurant', 'seq-pac-plugin' ),
			'Winery'             => __( '—— Winery', 'seq-pac-plugin' ),

		// Government Offices.
		'GovernmentOffice' => __( '— Government Office', 'seq-pac-plugin' ),
			'PostOffice' => __( '—— Post Office', 'seq-pac-plugin' ),

		// Health and Beauty Businesses.
		'HealthAndBeautyBusiness' => __( '— Health and Beauty Business', 'seq-pac-plugin' ),
			'BeautySalon'  => __( '—— Beauty Salon', 'seq-pac-plugin' ),
			'DaySpa'       => __( '—— Day Spa', 'seq-pac-plugin' ),
			'HairSalon'    => __( '—— Hair Salon', 'seq-pac-plugin' ),
			'HealthClub'   => __( '—— Health Club', 'seq-pac-plugin' ),
			'NailSalon'    => __( '—— Nail Salon', 'seq-pac-plugin' ),
			'TattooParlor' => __( '—— Tattoo Parlor', 'seq-pac-plugin' ),

		// Home and Construction Businesses.
		'HomeAndConstructionBusiness' => __( '— Home and Construction Business', 'seq-pac-plugin' ),
			'Electrician'       => __( '—— Electrician', 'seq-pac-plugin' ),
			'GeneralContractor' => __( '—— General Contractor', 'seq-pac-plugin' ),
			'HVACBusiness'      => __( '—— HVAC Business', 'seq-pac-plugin' ),
			'HousePainter'      => __( '—— House Painter', 'seq-pac-plugin' ),
			'Locksmith'         => __( '—— Locksmith', 'seq-pac-plugin' ),
			'MovingCompany'     => __( '—— MovingCompany', 'seq-pac-plugin' ),
			'Plumber'           => __( '—— Plumber', 'seq-pac-plugin' ),
			'RoofingContractor' => __( '—— Roofing Contractor', 'seq-pac-plugin' ),

		'InternetCafe' => __( '— Internet Cafe', 'seq-pac-plugin' ),

		// Legal Services.
		'LegalService' => __( '— Legal Service', 'seq-pac-plugin' ),
			'Attorney' => __( '—— Attorney', 'seq-pac-plugin' ),
			'Notary'   => __( '—— Notary', 'seq-pac-plugin' ),

		'Library' => __( '— Library', 'seq-pac-plugin' ),

		// Lodging Businesses.
		'LodgingBusiness' => __( '— Lodging Business', 'seq-pac-plugin' ),
			'BedAndBreakfast' => __( '—— Bed and Breakfast', 'seq-pac-plugin' ),
			'Campground'      => __( '—— Campground', 'seq-pac-plugin' ),
			'Hostel'          => __( '—— Hostel', 'seq-pac-plugin' ),
			'Hotel'           => __( '—— Hotel', 'seq-pac-plugin' ),
			'Motel'           => __( '—— Motel', 'seq-pac-plugin' ),
			'Resort'          => __( '—— Resort', 'seq-pac-plugin' ),

		'ProfessionalService' => __( '— Professional Service', 'seq-pac-plugin' ),
		'RadioStation'        => __( '— Radio Station', 'seq-pac-plugin' ),
		'RealEstateAgent'     => __( '— Real Estate Agent', 'seq-pac-plugin' ),
		'RecyclingCenter'     => __( '— Recycling Center', 'seq-pac-plugin' ),
		'SelfStorage'         => __( '— Self Storage', 'seq-pac-plugin' ),
		'ShoppingCenter'      => __( '— Shopping Center', 'seq-pac-plugin' ),

		// Sports Activity Locations.
		'SportsActivityLocation' => __( '— Sports Activity Location', 'seq-pac-plugin' ),
			'BowlingAlley'       => __( '—— Bowling Alley', 'seq-pac-plugin' ),
			'ExerciseGym'        => __( '—— Exercise Gym', 'seq-pac-plugin' ),
			'GolfCourse'         => __( '—— Golf Course', 'seq-pac-plugin' ),
			'HealthClub'         => __( '—— Health Club', 'seq-pac-plugin' ),
			'PublicSwimmingPool' => __( '—— Public Swimming Pool', 'seq-pac-plugin' ),
			'SkiResort'          => __( '—— Ski Resort', 'seq-pac-plugin' ),
			'SportsClub'         => __( '—— Sports Club', 'seq-pac-plugin' ),
			'StadiumOrArena'     => __( '—— Stadium or Arena', 'seq-pac-plugin' ),
			'TennisComplex'      => __( '—— Tennis Complex', 'seq-pac-plugin' ),

		// Store types.
		'Store' => __( '— Store', 'seq-pac-plugin' ),
			'AutoPartsStore'      => __( '—— Auto Parts Store', 'seq-pac-plugin' ),
			'BikeStore'           => __( '—— Bike Store', 'seq-pac-plugin' ),
			'BookStore'           => __( '—— Book Store', 'seq-pac-plugin' ),
			'ClothingStore'       => __( '—— Clothing Store', 'seq-pac-plugin' ),
			'ComputerStore'       => __( '—— Computer Store', 'seq-pac-plugin' ),
			'ConvenienceStore'    => __( '—— Convenience Store', 'seq-pac-plugin' ),
			'DepartmentStore'     => __( '—— Department Store', 'seq-pac-plugin' ),
			'ElectronicsStore'    => __( '—— Electronics Store', 'seq-pac-plugin' ),
			'Florist'             => __( '—— Florist', 'seq-pac-plugin' ),
			'FurnitureStore'      => __( '—— Furniture Store', 'seq-pac-plugin' ),
			'GardenStore'         => __( '—— Garden Store', 'seq-pac-plugin' ),
			'GroceryStore'        => __( '—— Grocery Store', 'seq-pac-plugin' ),
			'HardwareStore'       => __( '—— Hardware Store', 'seq-pac-plugin' ),
			'HobbyShop'           => __( '—— Hobby Shop', 'seq-pac-plugin' ),
			'HomeGoodsStore'      => __( '—— Home Goods Store', 'seq-pac-plugin' ),
			'JewelryStore'        => __( '—— Jewelry Store', 'seq-pac-plugin' ),
			'LiquorStore'         => __( '—— Liquor Store', 'seq-pac-plugin' ),
			'MensClothingStore'   => __( '—— Mens Clothing Store', 'seq-pac-plugin' ),
			'MobilePhoneStore'    => __( '—— Mobile Phone Store', 'seq-pac-plugin' ),
			'MovieRentalStore'    => __( '—— Movie Rental Store', 'seq-pac-plugin' ),
			'MusicStore'          => __( '—— Music Store', 'seq-pac-plugin' ),
			'OfficeEquipmentStore'=> __( '—— Office Equipment Store', 'seq-pac-plugin' ),
			'OutletStore'         => __( '—— Outlet Store', 'seq-pac-plugin' ),
			'PawnShop'            => __( '—— Pawn Shop', 'seq-pac-plugin' ),
			'PetStore'            => __( '—— Pet Store', 'seq-pac-plugin' ),
			'ShoeStore'           => __( '—— Shoe Store', 'seq-pac-plugin' ),
			'SportingGoodsStore'  => __( '—— Sporting Goods Store', 'seq-pac-plugin' ),
			'TireShop'            => __( '—— Tire Shop', 'seq-pac-plugin' ),
			'ToyStore'            => __( '—— Toy Store', 'seq-pac-plugin' ),
			'WholesaleStore'      => __( '—— Wholesale Store', 'seq-pac-plugin' ),

		'TelevisionStation'        => __( '— Television Station', 'seq-pac-plugin' ),
		'TouristInformationCenter' => __( '— Tourist Information Center', 'seq-pac-plugin' ),
		'TravelAgency'             => __( '— Travel Agency', 'seq-pac-plugin' ),

	'MedicalOrganization' => __( 'Medical Organization', 'seq-pac-plugin' ),
	'NGO'                 => __( 'NGO (Non-Governmental Organization', 'seq-pac-plugin' ),
	'PerformingGroup'     => __( 'Performing Group', 'seq-pac-plugin' ),
	'SportsOrganization'  => __( 'Sports Organization', 'seq-pac-plugin' )
];

$options = get_option( 'schema_org_type' );

$html = '<p><select id="schema_org_type" name="schema_org_type">';

foreach( $types as $type => $value ) {

	$selected = ( $options == $type ) ? 'selected="' . esc_attr( 'selected' ) . '"' : '';

	$html .= '<option value="' . esc_attr( $type ) . '" ' . $selected . '>' . esc_html( $value ) . '</option>';

}

$html .= '</select>';
$html .= sprintf(
	'<label for="schema_org_type"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
	$args[0],
	esc_attr( esc_url( 'https://schema.org/docs/full.html#C.Organization' ) ),
	esc_attr( __( 'Read documentation for organization types', 'seq-pac-plugin' ) )
);
$html .= '</p>';

echo $html;