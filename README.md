# Meter generation for dataconn
      
	  As per the requirement LoggingMeterRegistry is most suitable options among all available registries. LoggingMeterRegistry dumps logs in a files. 
	  
		  It summarizes the metrics to a logger
		  It dumps the metrics in log format. ( We can do away with the log prefix and keep only the log message by modyfying the logback.xml )
		  It works on step. The width of the step is the interval at which metrics are dumped. It is set to 1 minute for LoggingMeterRegistry.
		  Gauge metrics are dumped in every cycle (of 1 minute).
		  Counter and Timer metrics are updated only when the value changes.
		  We can create custom config as per requirement. 

		
	
 
# How to use 
	
	Add maven dependency in pox.xml
		<dependency>
			<groupId>io.micrometer</groupId>
			<artifactId>micrometer-core</artifactId>
			<version>1.2.0</version>
		</dependency>
	
	Just before creating a registry for each component. we can include isInstrumentationAvailable method to check class path for Micrometer. isInstrumentationAvailable methd provided by Project Reactor.
		Metrics.isInstrumentationAvailable();  // It will return true or false
	
	create LoggerMeterRegistry object
  
		LoggingMeterRegistry oneSimpleMeter = new LoggingMeterRegistry();  // for using default configuration
		LoggingMeterRegistry oneSimpleMeter = new LoggingMeterRegistry(new CustomConfig(), Clock.SYSTEM); // for using custom config for LoggerMeterRegistry
	
	For flux default metrics we have to add registry
		
		io.micrometer.core.instrument.Metrics.addRegistry(oneSimpleMeter);
		
	Create a FileAppender in logback.xml for each component in DataConn. Attach the logger for LoggingMeterRegistry class with the defined FileAppender.We can also write headers to the file.
	
# Example

package logging;

import io.micrometer.core.instrument.logging.LoggingMeterRegistry;
import reactor.core.publisher.Flux;
public class MicroMeterLog {
    public static void main(String[] args) throws InterruptedException {

        LoggingMeterRegistry logRegistory = new LoggingMeterRegistry();

        io.micrometer.core.instrument.Metrics.addRegistry(logRegistory);;


        Flux < String > dataStream = Flux.just("AA", "BB", "CC", "DD");
        dataStream.name("micor-meter-poc").tag("key", "value").metrics().subscribe(p - > {
            System.out.println(" Value -- " + p);
            try {
                Thread.sleep(1000);
            } catch (InterruptedException e) {
                e.printStackTrace();
            }
        });

        Thread.sleep(1000000000);
    }
};
