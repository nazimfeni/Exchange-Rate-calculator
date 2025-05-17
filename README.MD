### To install tailwind using cli
```
npm install tailwindcss @tailwindcss/cli
@import "tailwindcss";  // src/input.css
npx @tailwindcss/cli -i ./src/input.css -o ./src/output.css --watch
```
### Database creation
```
CREATE TABLE currencies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(10) NOT NULL,
    flag_url VARCHAR(255) NOT NULL
);

INSERT INTO currencies (code, flag_url) VALUES
('USD', 'https://flagcdn.com/w20/us.png'),
('EUR', 'https://flagcdn.com/w20/eu.png'),
('BDT', 'https://flagcdn.com/w20/bd.png');

CREATE TABLE exchange_rates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    currency_code VARCHAR(10) NOT NULL,
    rate DECIMAL(10, 4) NOT NULL
);

INSERT INTO exchange_rates (currency_code, rate) VALUES
('USD', 0.0065),
('EUR', 0.0060),
('BDT', 0.70);

```

