

### **📌 `README.md`**
📂 **Path: `README.md`**
```md
# 🚆 Laravel Blade Templates Lab

## **📌 Lab Overview**
This lab explores **Blade templates in Laravel**, focusing on:
- Creating **layouts** (`app.blade.php`) for reusable structures.
- Using **Blade components** for UI modularity.
- Implementing **Blade directives** (`@if`, `@foreach`, `@yield`, `@include`).
- **Mocking data in controllers** instead of using a database.

---

## **📌 How to Run the Project**
1️⃣ **Clone or navigate to your Laravel project**  
```sh
cd BladeLab
```
2️⃣ **Start Laravel server**  
```sh
php artisan serve
```
3️⃣ **Visit in browser**  
```
http://127.0.0.1:8000/
http://127.0.0.1:8000/about
```

---

## **📌 Blade Components & Directives Used**
### **🔹 Blade Layout (`app.blade.php`)**
- `@yield('content')` → Injects content dynamically.
- `@include('partials.nav')` → Includes navigation.

### **🔹 Blade Components**
- `<x-alert type="success" message="Message here"/>` → Custom alert component.
- `<x-button color="primary">Click Me</x-button>` → Reusable button component.

### **🔹 Blade Directives**
- `@extends('layouts.app')` → Extends layout.
- `@section('title', 'Page Title')` → Sets the page title.
- `@if($condition)` / `@foreach($items as $item)` → Conditional statements and loops.

---

## **📌 Screenshots**
--home page
![屏幕截图 2025-03-10 133301](https://github.com/user-attachments/assets/4e64f84b-7a67-4b61-8827-5beb2dc72277)
--about page
![屏幕截图 2025-03-10 133333](https://github.com/user-attachments/assets/ae5ca7fa-397e-49d3-a8ff-a438cb7be78b)
---



