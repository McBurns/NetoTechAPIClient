[Git repositorie](https://github.com/McBurns/NetoTechAPIClient)

# Test task for the company "Neto Tech" #
# API PHP client #

This is php API client. This library allows to use some API versions. 

For structure and syntax API [check the file](/PHP%20Test.pdf).

## Usage
### API documentation
#### For Countries
- `/countrues` `[GET]` - a list of the available countries.  
  `class:`* ClientAPI\Country, `method:` get_all_countries.  
  `@return` *array | null*
- `/countrues/:id` `[GET]` - get a specific country.  
  `class:` ClientAPI\Country, `method:` get_country.  
  `arguments:` $id  
  `@return`  *array | null*
#### For Cards
- `/cards/:id` `[GET]` - get the card info.  
  `class:` ClientAPI\Card, `method:` get.  
  `arguments:` $id  
  `@return`  *array | null*
- `/cards/:id/balance` `[GET]` - gets the balance of the card.  
  `class:` ClientAPI\Card, `method:` get_balance.  
  `arguments:` $id  
  `@return`  *float | null*
- `/cards/:id/pin` `[GET]` - gets the pin code of the card.  
  `class:` ClientAPI\Card, `method:` get_pin.  
  `arguments:` $id  
  `@return`  *string | null*
- `/cards/:id/history` `[GET]` - get a list of transaction history, expects a timeframe
  (end & start dates).  
  `class:` ClientAPI\Card, `method:` get_history.  
  `arguments:` $id  
  `@return`  *array | null*
- `/cards/:id/create` `[POST]` - creates a new debit card.  
  `class:` ClientAPI\Card, `method:` create.  
  `arguments:` $params  
  `@return`  *array | null*
- `/cards/:id/deactivate` `[POST]` - deactivates a card.  
  `class:` ClientAPI\Card, `method:` deactivate.  
  `arguments:` $id  
  `@return`  *array | null*
- `/cards/:id/activate` `[POST]` - activate a card.  
  `class:` ClientAPI\Card, `method:` activate.  
  `arguments:` $id  
  `@return`  *array | null*
- `/cards/:id/update` `[POST]` - updates the pin of the card.  
  `class:` ClientAPI\Card, `method:` activate.  
  `arguments:` $id  
  `@return`  *array | null*
- `/cards/:id/load` `[POST]` - loads card with a balance, expects to get the amount
  to load as a parameter.  
  `class:` ClientAPI\Card, `method:` load.  
  `arguments:` $id  
  `@return`  *array | null*
  