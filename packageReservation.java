package labExsamsPackage;

public class packageReservation extends Reservation {
	private String extras;

	public packageReservation(String costumerName, Date date, String extras)	{
		super(costumerName, date);
		this.extras = extras;
	}


	public packageReservation(String costumerName, Date date, int duration, String extras) {
		super(costumerName, date, duration);
		this.extras = extras;
	}

	public String toString() {
		return super.toString() + ", Extras = " + extras;
	}


}
