### To install tailwind using cli
```
npm install tailwindcss @tailwindcss/cli
@import "tailwindcss";  // src/input.css
npx @tailwindcss/cli -i ./src/input.css -o ./src/output.css --watch
```
### Database creation
```
CREATE TABLE exchange_rates (
  id INT AUTO_INCREMENT PRIMARY KEY,
  currency_code VARCHAR(3) NOT NULL UNIQUE,
  rate DECIMAL(10,6) NOT NULL
);

INSERT INTO exchange_rates (currency_code, rate) VALUES
('USD', 0.0065),
('EUR', 0.0060),
('BDT', 0.72);
```

