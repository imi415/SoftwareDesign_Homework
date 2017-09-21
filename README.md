# Software Design Homework project

* Laravel project for completing homework.

## Task
A e-Commerce system.

## Sub Tasks

* [x]Store item management
  - [x]Item CURD
    - Database Schema
      - id(primary key)
      - name(string)
      - image_url(string)
      - description(text)
      - is_available(bool)
      - available_amount(integer)
      - seller(integer, uid)
      - price(decimal)
      - default_shipping_fee(decimal)
      - sold_amount(integer)
* [x]User management
  - [x]User CURD
  - [x]Login/Signup
  - [x]Credential management(Password/Address)
  - [ ]Cart
* [x]Online order system
  - [x]Order CURD
    - Database Schema (Order)
      - id(primary key)
      - buyer_id(integer)
      - seller_id(integer)
      - shipping_fee(decimal)
      - tracking_id(integer)
      - status(string)
    - Database Schema (OrderItem)
      - id(primary key)
      - order_id(integer)
      - item_id(integer)
      - real_price(decimal)
* [x]Order status review
  - [ ]Refund, snapshot
* [ ]Real-time chat(optional)
