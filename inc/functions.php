<?php

class Functions
{
    public static function printQuote()
    {
        $quote = self::getRandomQuote();
        $quoteDisplay = "";
        $quoteDisplay .= '<p class="quote">' . $quote['quote'] . '</p>';
        $quoteDisplay .= '<p class="source">' . $quote['source'];

        if (isset($quote['citation'])) {
            $quoteDisplay .= '<span class="citation">' . $quote['citation'] . '</span>';
        }

        if (isset($quote['year'])) {
            $quoteDisplay .= '<span class="year">' . $quote['year'] . '</span>';
        }

        $quoteDisplay .= '</p>';

        echo $quoteDisplay;
    }

    private static function getRandomQuote(): array
    {
        $quotes = [
            [
                "quote" => "The greatest glory in living lies not in never falling, but in rising every time we fall.",
                "source" => "Nelson Mandela",
            ],
            [
                "quote" => "The way to get started is to quit talking and begin doing.",
                "source" => "Walt Disney",
            ],
            [
                "quote" => "Your time is limited, so don't waste it living someone else's life. Don't be trapped by dogma – which is living with the results of other people's thinking.",
                "source" => "Steve Jobs",
            ],
            [
                "quote" => "If life were predictable it would cease to be life, and be without flavor.",
                "source" => "Eleanor Roosevelt",
            ],
            [
                "quote" => "If you look at what you have in life, you'll always have more. If you look at what you don't have in life, you'll never have enough.",
                "source" => "Oprah Winfrey",
            ],
            [
                "quote" => "If you set your goals ridiculously high and it's a failure, you will fail above everyone else's success.",
                "source" => "James Cameron",
            ],
            [
                "quote" => "Life is what happens when you're busy making other plans.",
                "source" => "John Lennon",
            ],
        ];

        $randomQuoteIndex = rand(0, count($quotes) - 1);

        return $quotes[$randomQuoteIndex];
    }
}
