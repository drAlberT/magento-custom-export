Magento custom sales export
====================

Magento module to export sales to CSV in a customised fashion

CSV template file available in `Albert/CustomExport/Template/template.csv`

Possible entities to be used are:
- Order
- Customer
- Address

Example:
---
```
order.increment_id , order.status , order.grand_total , customer.email
```

