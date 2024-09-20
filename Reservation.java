package labExsamsPackage;

public class Reservation {
	private String costumerName ;
	private Date date;
	private int duration;
	private static int reservationNo = 0;


	public Reservation (String costumerName, Date date)	{
		this.costumerName = costumerName;
		this.date = date;
		reservationNo++;
	}


	public Reservation(String costumerName, Date date, int duration) {
		this.costumerName = costumerName;
		this.date = date;
		this.duration = 1;
		reservationNo++;
	}

	public void setDate(Date date) {
		this.date = date;
	}


	public void setDuration(int duration) {
		this.duration = duration;
	}


	public String toString() {
		return "Reservation [ Name=" + costumerName + ", Date=" + date + ", Duration=" + duration + ", Reservation Number =" + reservationNo+ "]";
	}










}
