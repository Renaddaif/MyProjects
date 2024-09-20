package labExamPackage2;

public class Envelope <T>extends Shipment{
	
	
	private String type;
	
	
	public Envelope(String receiver, double weight, T number, String type) {
		super(receiver, weight, number);
		this.type = type;
		
	}


	
	public double shippingcost() {
		
		double priceOfStamp = 2;
		return priceOfStamp + weight * 2 ;
		
	
	}



	
	public String toString() {
		return "Envelope: " + super.toString()+  " , type: " + type  + ", " ;
		
	}



}
