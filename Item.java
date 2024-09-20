package package1;


public abstract class Item {

   private final String Id;
   private double Price;
   private int quantity;

   public Item(String id, double price, int quantity) {
       this.Id = id;
       this.setPrice(price);
       this.setQuantity(quantity);
   }

   public String getId() {
	   
       return Id;
       
   }

   public int getQuantity() {
	   
       return quantity;
       
   }

   public void setQuantity(int quantity) {
	   
       this.quantity = quantity;
       
   }

   public double getPrice() {
	   
       return Price;
   }

   public void setPrice(double price) {
	   
       this.Price = price;
   }

  
   public String toString() {
       return String.format("ID= "+ Id +  " , Price=   " + Price + "  , Quantity= " +  quantity );
   }

}