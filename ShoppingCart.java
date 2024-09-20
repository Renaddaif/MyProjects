package package1;

public class ShoppingCart {

	private static final int MaxSize = 10;
	private Item[] items = new Item[MaxSize];
	private int itemCount = 0;

	public boolean addItem(Item item1) {
		if (this.itemCount < MaxSize) {
			this.items[this.itemCount++] = item1;
			
			System.out.println("Item is added to the cart");
			return true;
		} else {
			System.out.println("Failed to add item");
			return false;
		}
	}

	public boolean removeItem(String itemId) {

		for (int i = 0; i < itemCount; i++) {
			if (items[i].getId().equals(itemId)) {
				itemCount--;
				if (i != itemCount)
					items[i] = items[itemCount];
				items[itemCount] = null;
				System.out.println("Item has successfully been removed from the cart");
				return true;
			}
		}
		System.out.println("Failed to remove item please try again");
		return false;
	}


	public void viewItems() {
		System.out.println(toString());
	}


	public String toString() {
		String cartItems = "There are " + itemCount + " item(s) in your cart.\n";
		for (int i = 0; i < itemCount; i++) {
			cartItems += (i + 1) + " -" + items[i];
		}
		return cartItems;
	}

	public int getItemCount() {
		return itemCount;
	}

}

