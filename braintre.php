<?php
import com.braintreegateway.encryption.Braintree;

public class BraintreeExample {
    public static void main(String[] args) {
      Braintree braintree = new Braintree("your-client-side-encryption-key");
      String encryptedCreditCardNumber = braintree.encrypt("4111111111111111");
      String encryptedCvv = braintree.encrypt("111");
      String encryptedExpirationDate = braintree.encrypt("01/2014");
    }
}
?>