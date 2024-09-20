package labExamPackage2;

public abstract class Shipment <T> implements Deliverable{
	
	protected String receiver;
	protected double weight;
	protected T number;
	
	public Shipment(String receiver, double weight, T number) {

		this.receiver = receiver;
		this.weight = weight;
		this.number = number;
	}

	public String getReceiver() {
		return receiver;
	}

	
	public String toString() {
		return "Shipment receiver: " + receiver + ", weight: " + weight + ", number: " + number ;
	}
	
	
	
	

}
