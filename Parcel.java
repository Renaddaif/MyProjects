package labExamPackage2;

public class Parcel <T> extends Shipment{


	private double width;
	private double length;
	private double height;





	public Parcel(String receiver, double weight, T number, double width, double length, double height) {
		super(receiver, weight, number);
		this.width = width;
		this.length = length;
		this.height = height;
	}





	public double shippingcost() {
		double cost = (height * width * length) * 2 + weight;
		return cost;
	} 




	public String toString() { 
		return "Parcel: " + super.toString()  + " , width: "  + width + ", length: " + length + " , height: " + height + " , ";
	}



}
