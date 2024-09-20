package labExamPackage2;

public class Tester {

	public static void main(String[] args) {
	
		Deliverable[] array = new Deliverable[2];
		
		Envelope obj1 = new Envelope("Ahmed", 12.00, "1244-23", "A4");
		Parcel obj2 = new Parcel("Norah", 500.00, 12345 , 10.00, 3.0, 5.00);
		
		array[0] = obj1;
		array[1] = obj2;
		
		for (Deliverable arr : array) 
			
		
		
			
			
		System.out.println(arr + "Shipping cost: " + arr.shippingcost() + " SAR ");	
		
		
	}

}
