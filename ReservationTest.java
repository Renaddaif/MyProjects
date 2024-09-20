package labExsamsPackage;

public class ReservationTest {

	public static void main(String[] args) {
		Date date1 = new Date(29, 6, 2022);
		Date date2 = new Date(17,8, 2022);
		Date date3 = new Date(10,1, 2022);

		Reservation reservation1 = new Reservation("Abdullah Alali", date1) ;
		Reservation reservation2 = new Reservation("Shaden Alnajem", date2, 9);

		packageReservation packagereservation1 = new packageReservation("Ahmad Alzahrani", date3, "Breakfast  + lunch");
		packagereservation1.setDuration(7);


		System.out.println(reservation1.toString());
		System.out.println(reservation2.toString());
		System.out.println(packagereservation1.toString());




	}

}
