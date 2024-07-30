## About

This project is a simple (not so simple in the making tho) store's website that implements [TALL stack](https://tallstack.dev):
- [Tailwind CSS](https://tailwindcss.com)
- [AlpineJS](https://alpinejs.dev)
- [Laravel](https://laravel.com/)
- [Livewire](https://livewire.laravel.com)

*Can't remember if alpine is used at all, pretty sure i just used livewire instead

<!-- ## Features
#### for store Owner
- manage products, three categories is set as a default, all products has a size and color variant
- see any order that has been submitted by customers, filter it by date, manage order status
#### for customers
- see products
- order products without making an account -->

## Interesting Mechanisms
#### Shopping Cart
Uses session where the key is a combination of product's ID, selected size and selected color while the value is the amount. In the cart page Livewire makes it easy to change the amount of items.

#### Calculating Delivery Fee
Uses a free API by [RajaOngkir](https://rajaongkir.com) according to the location inputted by the customer. Livewire makes it possible to have dependent dropdowns without submitting a form that reloads the page.

#### Owner View
Authentication and authorization is used to create a view for owner (by going to /admin/login). They can manage products such as adding new products according to their category, set the price, size and color. If a product has more variant there needs to be some changes. The owner can also see products history.

## TBA
- change variant as a JSON so that each product can have a unique variant
- more than 1 image, change color means change image
- payment integration (maybe QRIS, unfortunately the API is not free as I can remember)
- automatic billing through email (if possible change email to whatsapp)
- order history in local storage?
- MORE SECURE
- better owner view

*I honestly don't know why an app like this would be used in Indonesia. We got easy to use platforms such as Tokopedia, Bukalapak, Shopee, others. Customers don't need an account for every other store they visit, an integrated and secure payment, track where their order is at, order histories, collect discounts. Also the owners they don't need to commission a developer to create a platform that may or may not be safe enough.
