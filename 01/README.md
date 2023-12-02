# Advent Day #1

See: https://adventofcode.com/2023/day/1

## Notes
Pretty straight forward solution, use a Regex to find all digits, grab the first and the last unless they're the same, combine as a string and cast to int and add to the total.

Step 2 was a read head scratcher, at first tried to just replace all the numbers with their digits but was coming out two low because `oneight` should be treated as `18` but the `str_replace` leaves us `1ight` so we come up 8 short, few attempts a keeping track of the locations of chars to find cross overs and drop back in the over lapping letters but that go silly, then I struck upon the idea of forcing back in the first and last letters of each number, much simpler. 